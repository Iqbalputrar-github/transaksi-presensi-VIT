<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index(){
        if($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->role == 'pegawai') {
                return redirect()->intended('pegawai');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
         [  'username' => 'required',
            'password' => 'required',
       ] );

       $krendensil = $request->only('username','password');

       if (Auth::attempt($krendensil)) {
        $user = Auth::user();
        if($user->role == 'admin'){
            return redirect()->intended('admin');
            
        } elseif ($user->role == 'pegawai') {
            return redirect()->intended('pegawai');
        }
        return redirect()->intended('/');
       }

       return redirect('login')
       ->withInput()
       -withErrors(['login_gagal' => 'These credentials do  not macth our records']);

    }
}
