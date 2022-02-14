<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    public function index(){
        if(auth()->user()->role_id==2){
            return back();
        }else{
            $users = User::all();
            return view('admin.admin', compact('users'));
        }
    }

    public function update(Request $request){
        $id = $request->user_id;
        $user = User::where('account_id', $id)->first();
        return view('admin.updateRole', compact('user'));
    }

    public function updateRole(Request $request){
        $id = $request->user_id;
        $validate = $request->validate([
            'role_id' => 'required'
        ]);

        User::where('account_id', $id)->update([
            'role_id' => $validate['role_id']
        ]);

        return redirect()->route('admin');
    }

    public function delete(Request $request){
        $id = $request->user_id;
        User::where('account_id', $id)->delete();

        return redirect()->route('admin');
    }
}
