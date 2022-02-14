<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $user = User::where([
            'email' => $request->email,
            'password' => $request->password
        ])->first();

        if($user){
            Auth::login($user);
            return redirect()->route('home');
        }else{
            return back()->with('loginError', trans('string.LoginError'));
        }
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('index')->with('Msg', trans('string.notif.LogOut'));
    }
}
