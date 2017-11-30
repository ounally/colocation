<?php

namespace colocation;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
        'id','nom', 'prenom' , 'email', 'password',
        'photo','sexe','age','telephone',
        'adresse','codepostal','ville','pays',
        'bio','niveau','fbid','mailverification',
        'telephoneverification' , 'idverification', 
        'charteverification', 'fbverification', 
        'charteverification',
    ];
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'admin',
    ];



    public function is_admin(){
        if ($this->admin == 1){
            return true;
        }
        return false;
    }

    public function FullName()
    {
        return $this->nom . ' ' . $this->prenom;
    }
    public function home()
    {
        return view('front_office.index', array('user' => Auth::user()));
    }
}
