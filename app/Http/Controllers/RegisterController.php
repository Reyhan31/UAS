<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function val(Request $request){
        $validate = $request->validate([
            'first_name' => 'required|max:25|regex:/^[\pL\s-]+$/u', 
            'last_name' => 'required|max:25|regex:/^[\pL\s-]+$/u', 
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', Password::min(8)->numbers()],
            'gender_id' => 'required',
            'image' => 'required|image',
            'role_id' => 'required'
        ]);

        if($request->middle_name){
            $temp = $request->validate([
                'middle_name' => 'max:25|regex:/^[\pL\s-]+$/u'   
            ]);
            $validate['middle_name'] = $temp;
        }

        if($request->file('image')){
            $validate['display_picture_link'] = $request->file('image')->store('assets','public');
        }
        
        User::create($validate);
        return view('index');
    }
}
