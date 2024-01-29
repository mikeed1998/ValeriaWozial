<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Factura;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Domicilio;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd('construct');
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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            
			$user = User::create([
					'name' => $data['name'],
					'lastname' => $data['lastname'],
					'email' => $data['email'],
					'password' => Hash::make($data['password']),
			]);

            $domicilio = new Domicilio;
            $domicilio->user = $user->id;
            $domicilio->save();

            // dd($user);
			$factura = Factura::create([
				'user' => $user->id,
			]);

      return $user;
    }

		/**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm() {
        $pagina = 'registro';
        
        // dd('mostrar registrar');
        if (session('link')) {
            $myPath     = session('link');
            $registerPath  = url('/register');
            $loginPath  = url('/login');
            $previous   = url()->previous();
            if ($previous = $registerPath || $previous = $loginPath) {
                session(['link' => $myPath]);
            } else {
                session(['link' => $previous]);
            }
        } else {
            session(['link' => url()->previous()]);
        }
        return view('auth.register', compact('pagina'));
    }

    protected function redirectTo()
    {
        
        if (session('link')) {
            $myPath     = session('link');
            $registerPath  = url('/register');
            $loginPath  = url('/login');
            $previous   = url()->previous();

            if ($previous = $registerPath || $previous = $loginPath) {
                session(['link' => $myPath]);
            } else {
                session(['link' => $previous]);
            }
        } else {
            session(['link' => url()->previous()]);
        }

        if (session('link')) {
            return (session('link'));
        }
        return route('front.index');
    }
}
