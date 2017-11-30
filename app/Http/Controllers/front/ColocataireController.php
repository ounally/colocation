<?php

namespace colocation\Http\Controllers\front;

use Carbon\Carbon;
use Illuminate\Http\Request;
use colocation\Http\Controllers\Controller;
use Auth;
use DB;
use colocation\Colocatire;
use colocation\User;
use colocation\Colocataire;
use colocation\Local;
use colocation\Preference;
use colocation\Equipement;

class ColocataireController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/


    public function trouver_coll(){
        $data_user = Auth::user();
        return view('front_office.trouver_colocation',  array('user' => Auth::user()));
    }

    /**
     * ADD NEW LOCAL.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function trouver_col(Request $data){ 
        $user_id = Auth::user()->id;
        $adresse_loc = $data['adresse_search'];
        $url = "https://maps.google.com/maps/api/geocode/json?address=".urlencode($adresse_loc)."&sensor=false&key=AIzaSyB_SWTyYPoPqP8oQdRROF_rOr0OWvxSXkA";
        $response = file_get_contents($url);
        $response = json_decode($response, true);
        $lat = $response['results'][0]['geometry']['location']['lat'];
        $long = $response['results'][0]['geometry']['location']['lng'];
        $long_name = $response ['results'][0]['address_components'][0]['long_name'];
        $political = $response ['results'][0]['address_components'][2]['long_name'];


        $id = DB::table('colocataires')->insertGetId(
            ['budget' => $data->input('budget'),
            'description' => $data->input('description_trv'),
            'latitude' => $lat,
            'longitude' => $long,
            'rayon' => $data->input('rayon'),
            'country' => $long_name.', '.$political,
            'adresse' => $data->input('adresse_search'),
            'userType' => $data->input('typeUser'),
            'sitation' => $data->input('sitation'),
            'user_id' => $user_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]
        );
        return redirect('/mes_recherches_'.$user_id);
    }

    
}
