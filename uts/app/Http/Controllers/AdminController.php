<?php

namespace App\Http\Controllers;

class AdminController extends Controller{

    function ShowBase(){
        return view ('template.base');
    }

    function ShowHome(){
        return view ('template.backview.home');
    }
    function ShowYe(){
        return view ('template.backview.ye');
    }
}