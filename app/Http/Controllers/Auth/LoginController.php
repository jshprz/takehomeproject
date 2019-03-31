<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
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
    protected $redirectTo = '/employee';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function validator(array $data)
    {
        return Validator::make($data,[
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
        ]);
    }

    protected function doLogin(Request $request)
    {
       
                if(auth()->attempt(['username' => $request->username, 'password' => $request->password]))
                {
                    return redirect('/employee');
                }
                else
                {
                    return back()->with('loginMessage','Wrong username or password');
                }

        
       
    }

    
}
