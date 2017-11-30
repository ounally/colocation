<?php

namespace colocation\Http\Controllers\dashboard;

use colocation\User;
use colocation\Preference;
use colocation\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use Illuminate\Support\Facades\Input;
use Image;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDash()
    {
        return view('dashboard.index');
    }
    
    /**
     * 
     * FONCTION LISTER LES UTILISATEURS. /**DASHBOARD
     *
     * 
     */
    public function ListUsers()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }

    
    public function UserDetail($id)
    {
        $UserDetail = User::findOrFail($id);
        $UserPassword = $UserDetail->getAuthPassword();
        return view('dashboard.user_detail', compact('UserDetail','UserPassword'));
    }


    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function update_avatar(Request $request){
        $User_name = User::findOrFail($nom);
       $UserDetail = User::findOrFail($id);
        //upload avatar
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = $UserDetail . '_' . time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->save( public_path('/uploads/avatars/' . $filename ) );
    		$av_profile = $UserDetail;
    		$av_profile->photo = $filename;
            $av_profile->save();
    	}
        return back();
        return view('dashboard.user_detail',compact('UserDetail'));
    }


    /**
     * 
     * FONCTION MISE A JOUR INFO PERSO. /**DASHBOARD
     *
     * 
     */
    public function Up_user(Request $request, $id){
        $UserDetail = User::findOrFail($id); 
        $validator = Validator::make(Input::all(),
		array(
			'user_edit_email'	=> 'email',
            'user_edit_phone' 	=> 'regex:/[0-9]{8}/',
			'user_edit_cin'     => 'regex:/[0-9]{8}/',
            'user_edit_post'    => 'regex:/[0-9]{4}/',
            'user_edit_ville'    => 'regex:/[a-zA-Z]/',
            'user_edit_date'    => 'date',
		    )
	    );
        if($validator->fails()) {
            return view('dashboard.user_detail',compact('UserDetail'))->withErrors($validator);
        } else {
            $UserDetail->bio = $request->input('user_edit_bio');
            $UserDetail->ville = $request->input('user_edit_ville');
            $UserDetail->telephone = $request->input('user_edit_phone');
            $UserDetail->naissance = $request->input('user_edit_date');
            $UserDetail->codepostal = $request->input('user_edit_post');
            $UserDetail->cin = $request->input('user_edit_cin');
            $UserDetail->email = $request->input('user_edit_email');
            $UserDetail->sexe = $request->user_edit_sexe;
            $UserDetail->save();
        }
        return back();
        return view('dashboard.user_detail', compact('UserDetail'));
    }

    /**
     * 
     * FONCTION PREFERENCES. /**DASHBOARD
     *
     * 
     */
    public function preference(Request $request, $id){
        $UserDetail = User::findOrFail($id);
        $preferences = Preference::where('user_id', $UserDetail->id)->get();
        foreach($preferences as $preference){
                $discussion = $preference->discussion;
                $cigarette = $preference->cigarette;
                $animaux = $preference->animaux;
                $musique = $preference->musique;
            return back();
            return view('dashboard.user_detail', compact('discussion','cigarette','animaux','musique'));
        }
    }

    /**
     * 
     * FONCTION CHANGER MOT DE PASSE. /**DASHBOARD
     *
     * 
     */
    public function change_password(Request $request, $id){
        $validator = Validator::make(Input::all(),
		array(
            'password' 		=> 'required|min:6',
			'password_confirmation'=> 'required|same:password'
		    )
	    );
        if($validator->fails()) {
            $UserDetail = User::findOrFail($id);
            $UserPassword = $UserDetail->getAuthPassword();
            return view('dashboard/edit-users.mot-de-passe', compact('UserDetail','UserPassword'))->withErrors($validator);
        }else{

        $UserDetail = User::findOrFail($id);
        $UserPassword = $UserDetail->getAuthPassword();
        $comf_password = Input::get('password_confirmation');
		$new_password = Input::get('password');
		$UserDetail->password = Hash::make($new_password);

            if($UserDetail->save()) {
                $UserDetail = User::findOrFail($id);
                $UserPassword = $UserDetail->getAuthPassword();
                Session::flash('flash_message','Le mot de passe à été changé avec succès.');
                return back();
                return view('dashboard.user_detail', compact('UserDetail','UserPassword'));
            }
        }
        $UserDetail = User::findOrFail($id);
        $UserPassword = $UserDetail->getAuthPassword();
        Session::flash('flash_message-2','verfier les données!');
        return view('dashboard.user_detail', compact('UserDetail','UserPassword'));
    }
    
}
