<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use User;
use Session;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function playerLogin()
    {
        return view('my-assignment.pages.landing_page');
    }

    public function coachLogin()
    {
        return view('my-assignment.pages.coach_login_page');
    }

    public function adminLogin()
    {
        return view('my-assignment.pages.admin_login_page');
    }

    protected function playerDoLogin(Request $request)
    {
        if(!Auth::check())
        {
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password]))
            {
                return redirect('/player');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return false;
        }
    }

    protected function coachDoLogin(Request $request)
    {
        if(!Auth::guard('coach')->check())
        {
            if(Auth::guard('coach')->attempt(['username' => $request->username, 'password' => $request->password]))
            {
                return redirect('/coach');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return false;
        }
    }

    protected function adminDoLogin(Request $request)
    {
        if(!Auth::guard('admin')->check())
        {
            if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]))
            {
                return redirect('/admin');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return false;
        }
    }

    public function playerDoLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function coachDoLogout()
    {
        Auth::guard('coach')->logout();
        Session::flush();
        return redirect('/coach-login');
    }

    public function adminDoLogout()
    {
        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/admin-login');
    }
}
