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


class HalfMapController extends Controller
{
    public function halfmap(){

        $get_col = DB::table('locals')
        ->join('users', 'locals.user_id', '=', 'users.id')
        ->join('equipements','locals.id', '=', 'equipements.local_id')
        ->join('preferences','locals.id', '=', 'preferences.local_id')
        ->select('locals.*','users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin',
        'preferences.animaux','preferences.tabac','preferences.genre_prefer','preferences.age_min','preferences.age_max','preferences.profession',
        'equipements.climatiseur','equipements.gazDeVille','equipements.chaufageCentral','equipements.ascenseur','equipements.jardin',
        'equipements.wifi','equipements.parking','equipements.balcon')
        ->orderBy('locals.id', 'desc')
        ->get();
        
        foreach($get_col as $get_cols){
            $url = "https://maps.google.com/maps/api/geocode/json?address=".urlencode($get_cols->adresse)."&sensor=false&key=AIzaSyB_SWTyYPoPqP8oQdRROF_rOr0OWvxSXkA";
            $response = file_get_contents($url);
            $response = json_decode($response, true);
            $lat = $response['results'][0]['geometry']['location']['lat'];
            $long = $response['results'][0]['geometry']['location']['lng'];
        }
        return view('front_office.half_map', compact('get_col','lat','long'));
    }
}
