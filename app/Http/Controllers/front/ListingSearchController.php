<?php

namespace colocation\Http\Controllers\front;


use Illuminate\Http\Request;
use colocation\User;
use colocation\Colocataire;
use Auth;
use Session;
use DB;
use Image;
use Intervention\Image\ImageManager;
use colocation\Http\Controllers\Controller;

class ListingSearchController extends Controller
{
    protected $colocataires;
    
    public function __construct(Colocataire $colocataires)
    {
        $this->colocataires = $colocataires;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing(Request $request)
    {
        $nbr_colc = Colocataire::get()->count();

        $colocataires = DB::table('colocataires')
        ->join('users', 'colocataires.user_id', '=', 'users.id')
        ->select('colocataires.*', 'users.nom', 'users.prenom', 'users.age', 'users.email', 'users.photo', 'users.telephone', 'users.cin')
        ->orderBy('colocataires.id', 'desc')
        ->paginate(8);
        
        /*$locals = $this->locals->latest('created_at')->paginate(6);*/

        if ($request->ajax()) {
            return view('front_office.listing_search', ['colocataires' => $colocataires])->render();    
        }
        return view('front_office.listing_search', compact('colocataires','nbr_colc'));
    }
}
