<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;

class AuthController extends Controller
{


    function showLogin(){
        return view('template.frontview.login');
    }
    
    function Loginprocess(){
        if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('admin/home')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Logout(){
        Auth()->logout();
        return redirect('template.backview.home');
    }
}