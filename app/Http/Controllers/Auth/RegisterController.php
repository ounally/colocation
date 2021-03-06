<?php

namespace colocation\Http\Controllers\Auth;

use colocation\User;
use colocation\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:60',
            'tel' => 'required|regex:/[0-9]{8}/|max:8',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \colocation\User
     */
    protected function create(array $data)
    {
        if($data['sexe'] == 'homme'){
            $sexe = 'default.jpg';
        }else{
            $sexe = 'default_w.jpg';
        }
        return User::create([
            'sexe' => $data['sexe'],
            'nom' => $data['name'], 
            'prenom' => $data['prenom'],
            'telephone' => $data['tel'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'photo' => $sexe
        ]);
    }
}
