<?php

namespace colocation\Http\Controllers\front;

use Carbon\Carbon;
use Illuminate\Http\Request;
use colocation\User;
use colocation\Local;
use colocation\Colocataire;
use Auth;
use Hash;
use Session;
use Image;
use DB;
use Intervention\Image\ImageManager;
use colocation\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *int $id
     * @return \Illuminate\Http\Response
     */
    public function showProfile(User $userID)
    {
        $userID = Auth::user()->id;
        $user = Auth::user();
        return view('front_office/profile.my_profile', compact('user','userID'));
    }


    /**
     * Display a listing of the resource.
     *int $id
     * @return \Illuminate\Http\Response
     */
    public function wishlist(User $userID)
    {
        $userID = Auth::user()->id;
        $user = Auth::user();
        return view('front_office/profile.wishlist', compact('user','userID'));
    }

    /**
     * Display a listing of the resource.
     *int $id
     * @return \Illuminate\Http\Response
     */
    public function mes_colocations(User $userID)
    {
        
        $thisUser = Auth::user()->id;
        $mycols = DB::table('locals')
        ->where('user_id',$thisUser)
        ->get(); 
        
        return view('front_office/profile.mes_colocations ', compact('user','userID','mycols'));
    }

    
    /**
     * Display a listing of the resource.
     *int $id
     * @return \Illuminate\Http\Response
     */
    public function mes_recherches(User $userID)
    {
        $userID = Auth::user()->id;
        $user = Auth::user();
        $number_search = Colocataire::where('user_id','=',$userID)->count();
        return view('front_office/profile.mes_recherches', compact('user','userID','number_search'));
    }


    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function update_avatar(Request $request){
        //upload avatar
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = Auth::user()->id . '_' . time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(null, 350,function ($constraint) {
                $constraint->aspectRatio();})->fit(200, 200, function ($constraint) {
                                                    $constraint->upsize();
                                                    })->save( public_path('/uploads/avatars/' . $filename ) );
    		$av_profile = Auth::user();
    		$av_profile->photo = $filename;
            $av_profile->save();
    	}
        return view('front_office/profile.my_profile', array('user' => Auth::user()));
        return redirect()->route('myProfile');
    }


    /**
    * Store a new blog post.
    *
    * @param  Request  $request
    * @return \Illuminate\Contracts\Validation\Validator
    */
   public function update_password(Request $request){
       $validator = Validator::make(Input::all(),
       array(
           'old'	=> 'required',
           'password' 		=> 'required|min:6',
           'password_confirmation'=> 'required|same:password'
           )
       );

       if($validator->fails()) {
            return view('front_office/profile.password')->withErrors($validator);
       } else {
           
           // passed validation
           // Grab the current user
           $user = User::find(Auth::user()->id);
           // Get passwords from the user's input
           $old_password = Input::get('old');
           $password = Input::get('password');
           $password_comfirm = Input::get('password_confirmation');

           // test input password against the existing one
           if((Hash::check($old_password, $user->getAuthPassword())) && ($password == $password_comfirm)){
           $user->password = Hash::make($password);
               // save the new password
               if($user->save()) {
                   Session::flash('flash_message','Votre mot de passe à été changé avec succès.');
                   return view('front_office/profile.password',  array('user' => Auth::user()));
               }
               } else {
                   Session::flash('flash_message-1','verfier vos données!');
                   return view('front_office/profile.password',  array('user' => Auth::user()));
               }
       Session::flash('flash_message-2','verfier vos données!');
       return view('front_office/profile.password',  array('user' => Auth::user()));        
       } 
   }


    /**
     * Update profil user.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function update_profile(Request $request){
        $data_user = Auth::user();
        $IDuser = User::find(Auth::user()->id);
        $validator = Validator::make(Input::all(),
		array(
            'user_edit_name' => 'regex:/[a-zA-Z]/',
            'user_edit_prenom' => 'regex:/[a-zA-Z]/',
            'user_edit_cin'=>'regex:/[0-9]{8}/',
			'user_edit_cpost'=> 'regex:/[0-9]{4}/',
            'user_edit_pays'=> 'regex:/[a-zA-Z]/',
            'user_edit_ville'=> 'regex:/[a-zA-Z]/',
            /*'user_edit_tel'=>'digits_between:1,99999999',*/
		    )
	    );

        if($validator->fails()) {
            return view('front_office/profile.my_profile',  array('user' => Auth::user()))
                ->withErrors($validator);
        } else {
            $IDuser = Auth::user()->id;
            $update = DB::table('users')
                ->where('id',$IDuser)
                ->update([
                         'nom'=>$request->input('user_edit_name'),
                         'prenom'=>$request->input('user_edit_prenom'),
                         'cin'=>$request->input('user_edit_cin'),
                         'sexe'=>$request->input('user_edit_sexe'),
                         'age'=>$request->input('user_edit_naissance'),
                         'adresse'=>$request->input('user_edit_adr'),
                         'codepostal'=>$request->input('user_edit_cpost'),
                         'profession'=>$request->input('user_edit_prof'),
                         'ville'=>$request->input('user_edit_ville'),
                         'fbid'=>$request->input('user_edit_facebook'),
                         'bio'=>$request->input('user_edit_bio'),
                         'telephone'=>$request->input('user_edit_tel'),
                         'updated_at' => date('Y-m-d H:i:s')
                         ]);
            
            /*$data_user->nom = $request->input('user_edit_name'); 
            $data_user->prenom = $request->input('user_edit_prenom');
            $data_user->cin = $request->input('user_edit_cin');
            $data_user->sexe = $request->input('user_edit_sexe');
            $data_user->age = $request->input('user_edit_naissance');
            $data_user->adresse = $request->input('user_edit_adr');
            $data_user->codepostal = $request->input('user_edit_cpost');
            $data_user->ville = $request->input('user_edit_ville');
            $data_user->fbid = $request->input('user_edit_facebook');
            $data_user->bio = $request->input('user_edit_bio');
            $data_user->telephone = $request->input('user_edit_tel');
            $data_user->save();*/
        }
        return view('front_office/profile.my_profile',  array('user' => Auth::user()));
    }

    public function delete_col(User $userID, Request $request){
        $id_of_local = $request->input('id_of_local');

        DB::table('equipements')
        ->where('equipements.local_id', $id_of_local)
        ->delete();

        DB::table('preferences')
        ->where('preferences.local_id', $id_of_local)
        ->delete();


        DB::table('locals')
        ->where('locals.id', $id_of_local)
        ->delete();
        
        return redirect()->route('mes_colocations', auth()->user()->id);
    }

}
