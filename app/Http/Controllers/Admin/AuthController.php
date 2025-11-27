<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{
    Auth,
};
use Illuminate\Http\Request;

class AuthController extends Controller
{
     public function loginForm(){
        $title = "Login";
        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            return view('admin.auth.login', get_defined_vars());
        }
    }

    public function login(Request $request){
        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials, $request->has("remember"))){
            $user = Auth::user();
            if($request->has("remember") && !empty($request->remember)){
                setcookie("email", $request->email, time() + 3000);
                setcookie("password", $request->password, time() + 3000);
            }else{
                setcookie("email", "");
                setcookie("password", "");
            }
            $request->session()->regenerate();
            return response()->json(['success' => true, 'route' => route('dashboard')]);
        }else{
            return response()->json(['error' => 'Invalid Credentials.']);
        }
    }

    public function logOut(Request $request){
        if (Auth::check()) {
            $user = Auth::user();
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('admin.login');
        }else{
            return redirect()->route('admin.login');
        }
    }
}
