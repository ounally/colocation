<?php

namespace colocation\Http\Controllers\front;

use Illuminate\Http\Request;
use colocation\User;
use colocation\Colocataire;
use colocation\Local;
use colocation\Preference;
use colocation\Equipement;
use Auth;
use Hash;
use Session;
use DB;
use Image;
use Intervention\Image\ImageManager;
use colocation\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input; 

class ColocationController extends Controller
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

    public function add_coll(){
        $data_user = Auth::user();
        return view('front_office.add_colocation',  array('user' => Auth::user()));
    }


    /**
     * ADD NEW LOCAL.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function add_col(Request $data){
        
        if($data->hasFile('image_col')){
    		$avatar_col = $data->file('image_col'); 
    		$filename = 'local_'.Auth::user()->id . '_' . time() . '.' . $avatar_col->getClientOriginalExtension();
    		Image::make($avatar_col)->fit(600, 400)->save( public_path('/uploads/locals/' . $filename ) );
    	}
        $data_user = Auth::user();
        $user_id = Auth::user()->id; 
        
            Local::create([
                'titre' => $data['titre_col'],
                'adresse' => $data['adresse_col'], 
                'gouvernorat' => $data['ville_col'],
                'type_proporiete' => $data['type_col'],
                'type_chambre' => $data['indivi_col'],
                'nbr_chambre' => $data['nbr_rooms'],
                'prix' => $data['price_col'],
                'image' => $filename,
                'surface' => $data['surface_col'],
                'description' => $data['description_col'],
                'meublee' => $data['meuble_col'],
                'nbr_places' => $data['nbr_places'],
                'disponibilite' => $data['despo_col'],
                'user_id' => $user_id,
            ]);
            $local_adds = DB::table('locals')
            ->where('user_id', Auth::user()->id)
            ->get();
            foreach ($local_adds as $local_add)
            {
                $localid = $local_add->id;
            }
            /*Equipement::create([
                'climatiseur' => $data['clim_col'],
                'gazDeVille' => $data['gaz_col'], 
                'chaufageCentral' => $data['radiator_col'],
                'ascenseur' => $data['ascenseur'],
                'jardin' => $data['jardin'],
                'wifi' => $data['wifi_col'],
                'parking' => $data['parking'],
                'balcon' => $data['balcon'],
                'local_id' => $localid,
            ]);*/
            DB::table('equipements')->insertGetId
            ([
                'climatiseur' => $data['clim_col'],
                'gazDeVille' => $data['gaz_col'], 
                'chaufageCentral' => $data['radiator_col'],
                'ascenseur' => $data['ascenseur'],
                'jardin' => $data['jardin'],
                'wifi' => $data['wifi_col'],
                'parking' => $data['parking'],
                'balcon' => $data['balcon'],
                'local_id' => $localid,
                'updated_at' => date('Y-m-d H:i:s')]
            );
            /*Preference::create([
                'genre_prefer' => $data['g-prefer'],
                'animaux' => $data['animaux_col'], 
                'tabac' => $data['tabac_col'],
                'profession' => $data['profession'],
                'age_min' => $data['min_age_col'],
                'age_max' => $data['max_age_col'],
                'local_id' => $localid,
            ]);*/
            DB::table('preferences')->insertGetId
                ([
                    'genre_prefer' => $data->input('g-prefer'),
                    'animaux' => $data['animaux_col'], 
                    'tabac' => $data['tabac_col'],
                    'profession_prefer' => $data['profession'],
                    'age_min' => $data['min_age_col'],
                    'age_max' => $data['max_age_col'],
                    'local_id' => $localid,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')]
                );
        return redirect('colocations_'.$user_id.'');
    }
}