<?php

namespace colocation\Http\Controllers;

use Illuminate\Http\Request;
use colocation\User;
use colocation\Local;
use colocation\Preference;
use colocation\Equipement;
use colocation\Colocataire;
use Auth;
use Hash;
use Session;
use DB;
use Image;
use Intervention\Image\ImageManager;
use colocation\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input; 

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $latests = DB::table('locals')
                ->join('users', 'locals.user_id', '=', 'users.id')
                ->join('equipements','locals.id', '=', 'equipements.local_id')
                ->join('preferences','locals.id', '=', 'preferences.local_id')
                ->select('locals.*','users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin','users.profession',
                'preferences.animaux','preferences.tabac','preferences.genre_prefer','preferences.age_min','preferences.age_max','preferences.profession_prefer',
                'equipements.climatiseur','equipements.gazDeVille','equipements.chaufageCentral','equipements.ascenseur','equipements.jardin',
                'equipements.wifi','equipements.parking')
                ->orderBy('locals.id', 'desc')
                ->take(3)
                ->get();  
                
            $users_colocataires = DB::table('colocataires')
                ->join('users', 'colocataires.user_id', '=', 'users.id')
                ->select('colocataires.*', 'users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin')
                ->orderBy('colocataires.id', 'desc')
                ->take(4)
                ->get(); 
        return view('front_office.index',  compact('latests','equips','prefs','users_colocataires','cont_home')); 
    }
}