<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt( ['email' => $request->email, 'password' => $request->password] , $request->remember)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    protected function guard(){
        return Auth::guard('admin');
    }
    
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
}