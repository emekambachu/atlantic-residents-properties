<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $input = $request->all();
        $rules = array(
            'email' => 'required|exists:users,email',
            'password' => 'required|min:6',
        );
        $validator = Validator::make($input, $rules);
        if($validator->fails()){
            return response()->json([
                "success" => false,
                "errors" => $validator->getMessageBag()->toArray()
            ]);
        }

        if (Auth::guard()->attempt([
            'email' => $request->email, 'password' => $request->password
        ], $request->get('remember'))) {

            return response()->json([
                "success" => true,
            ]);
        }
        return response()->json([
            "success" => false,
            "message" => 'Incorrect login details'
        ]);
    }

    //perform logout
    public function logout(){
        Auth::guard()->logout();
        return redirect()->route('login');
    }
}
