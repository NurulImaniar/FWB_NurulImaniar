<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login() {
        return view('login');
    }
    public function register() {
        return view('register');
    }
    public function submitregister($request) {
         $user = new Users();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->password = Hash::make($request->name);
         $user->save();
         return redirect()->route('login');

    }
    public function submitlogin($request) {
        $user = $request->only ('email','password');
        
        if(Auth::attempt($use)){

            $role =
        }
    }
}
