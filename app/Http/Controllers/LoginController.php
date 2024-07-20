<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('operator.login');
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ],[
            'email' => 'Email Harus Diisi',
            'email.email' => 'Format Email Salah',
            'password' => 'Password Harus Diisi',
            'password.min' => 'Password Harus Diisi Minimal 8 Karakter',
       ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/op/sesi-1');
        }else{
            return redirect('/login')->with('error', 'Username atau Password Salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
