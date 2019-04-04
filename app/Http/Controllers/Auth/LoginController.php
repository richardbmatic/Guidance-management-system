<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo( ) {
        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'customer':
                    $this->redirectTo = '/customer';
                    return $this->redirectTo;
                    break;

                case 'agent':
                    $this->redirectTo = '/agent';
                    return $this->redirectTo;
                    break;

                case 'admin':
                    $this->redirectTo = '/admin';
                    return $this->redirectTo;
                    break;

                case 'student':
                    $this->redirectTo = '/student';
                    return $this->redirectTo;
                    break;
                
                default:
                    return redirect('/');
                    break;
            }
        }
    }
}
