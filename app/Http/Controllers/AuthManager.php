<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthManager extends Controller
{
    function login(){
        if(Auth::check()){
            return redirect(route('dashboard'));
         }
        return view('login');
    }

    function register(){
        if(Auth::check()){
            return redirect(route('dashboard'));
         }
        return view('register');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error", "Login gagal/invalid, coba lagi");
    }
    
    function registerPost(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email']= $request->email;
        $data['password'] =  Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error", "Registrasi gagal/invalid");
        }
        return redirect(route('login'))->with("success","Registrasi berhasil, Silakan Login");
    }


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
