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

class DetailController extends Controller
{
    
    public function detail_colocation($id){
        $localDetail = Local::find($id);

        $det_col = DB::table('locals')
        ->where('locals.id',$id)
        ->join('users', 'locals.user_id', '=', 'users.id')
        ->join('equipements','locals.id', '=', 'equipements.local_id')
        ->join('preferences','locals.id', '=', 'preferences.local_id')
        ->select('locals.*','users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin','users.profession',
        'preferences.animaux','preferences.tabac','preferences.genre_prefer','preferences.age_min','preferences.age_max','preferences.profession_prefer',
        'equipements.climatiseur','equipements.gazDeVille','equipements.chaufageCentral','equipements.ascenseur','equipements.jardin',
        'equipements.wifi','equipements.parking','equipements.balcon')
        ->orderBy('locals.id', 'desc')
        ->get();  

        foreach($det_col as $col){
            $adress = $col->adresse;

            $url = "https://maps.google.com/maps/api/geocode/json?address=".urlencode($adress)."&sensor=false&key=AIzaSyB_SWTyYPoPqP8oQdRROF_rOr0OWvxSXkA";
            $response = file_get_contents($url);
            $response = json_decode($response, true);
            $lat = $response['results'][0]['geometry']['location']['lat'];
            $long = $response['results'][0]['geometry']['location']['lng'];

            $true_adr = "https://maps.google.com/maps?q='+.$lat.+','+.$long.+'&z=11&amp;output=embed&control-disableUI&signed_in=false";
        }
        return view('front_office.detail_colocation',compact('det_col','true_adr'));
    }

    public function detail_search($id){
        $UserDetail = Colocataire::find($id); 
        $searchs = DB::table('colocataires')
        ->where('colocataires.id',$id)
        ->join('users', 'colocataires.user_id', '=', 'users.id')
        ->select('colocataires.*', 'users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin')
        ->orderBy('colocataires.id', 'desc')
        ->get(); 
        foreach($searchs as $search){
            $lat=$search->latitude;
            $lag=$search->longitude;
            $rayon=$search->rayon;
        }
        return view('front_office.detail_search',compact('searchs','lat','lag','rayon'));
    }
}