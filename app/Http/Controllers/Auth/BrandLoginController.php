<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class BrandLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Brand Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating brands for the application and
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
    protected $redirectTo = '/brandHome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest:brand', 'guest:admin', 'guest:web'])->except('brandLogout');
    }

    public function showBrandLoginForm()
    {
        return view('auth.brands.login');
    }

    public function brandLogin(Request $request)
    {
        //Validating Form Data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:8'
        ]);

        //Attempt to log brand in. 
        if (Auth::guard('brand')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
           
            //If successful, redirect them to their intended page.
            return redirect()->intended(route('brand.dashboard'));
        }

        //else send them back to Login page
        return back()->withInput($request->only('email', 'remember'));
    }


    public function brandLogout()
    {
        Auth::guard('brand')->logout();
        //$request->session()->invalidate();
        return redirect('/');
    }
}
