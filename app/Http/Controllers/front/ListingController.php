<?php

namespace colocation\Http\Controllers\front;
use Illuminate\Http\Request;
use colocation\User;
use colocation\Local;
use colocation\Preference;
use colocation\Equipement;
use Auth;
use Session;
use DB;
use Image;
use Intervention\Image\ImageManager;
use colocation\Http\Controllers\Controller;

class ListingController extends Controller
{


    protected $locals;
    
    public function __construct(Local $locals)
    {
        $this->locals = $locals;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(Request $request)
    {
        $nbr_room = Local::get()->count();

        $locals = DB::table('locals')
        ->join('users', 'locals.user_id', '=', 'users.id')
        ->join('equipements','locals.id', '=', 'equipements.local_id')
        ->join('preferences','locals.id', '=', 'preferences.local_id')
        ->select('locals.*','users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin','users.profession',
        'preferences.animaux','preferences.tabac','preferences.genre_prefer','preferences.age_min','preferences.age_max','preferences.profession_prefer',
        'equipements.climatiseur','equipements.gazDeVille','equipements.chaufageCentral','equipements.ascenseur','equipements.jardin',
        'equipements.wifi','equipements.parking')
        ->orderBy('locals.id', 'desc')
        ->paginate(6);
        
        /*$locals = $this->locals->latest('created_at')->paginate(6);*/

        if ($request->ajax()) {
            return view('front_office.listing_locals', ['locals' => $locals])->render();    
        }
        return view('front_office.listing', compact('locals','nbr_room'));
    }
}
