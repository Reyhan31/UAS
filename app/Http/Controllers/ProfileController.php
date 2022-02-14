<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function update(Request $request){
        

        $validate = $request->validate([
            'first_name' => 'required|max:25|regex:/^[\pL\s-]+$/u', 
            'last_name' => 'required|max:25|regex:/^[\pL\s-]+$/u', 
            'email' => 'required|email:dns',
            'password' => ['required', Password::min(8)->numbers()],
            'gender_id' => 'required',
            'image' => 'image',
            'role_id' => 'required'
        ]);

        if($request->middle_name){
            $temp = $request->validate([
                'middle_name' => 'max:25|regex:/^[\pL\s-]+$/u'   
            ]);
            $validate['middle_name'] = $temp['middle_name'];
        }

        if(auth()->user()->email != $validate['email']){
            $temp = $request->validate([
                'email' => 'unique:users'
            ]);
            $validate['email'] = $temp['email'];
        }

        if($request->file('image')){
            $validate['display_picture_link'] = $request->file('image')->store('assets', 'public');
            User::where('account_id', auth()->user()->account_id)->update([
                'display_picture_link' => $validate['display_picture_link']
            ]);
        }

        if($request->middle_name){
            User::where('account_id', auth()->user()->account_id)->update([
                'middle_name' => $validate['middle_name']
            ]);
        }else{
            User::where('account_id', auth()->user()->account_id)->update([
                'middle_name' => ""
            ]);
        }

        User::where('account_id', auth()->user()->account_id)->update([
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'email' => $validate['email'],
            'password' => $validate['password'],
            'gender_id' => $validate['gender_id'],
            'role_id' => $validate['role_id'],
        ]);

        return view('index')->with('Msg', trans('string.notif.saved'));

    }
}
