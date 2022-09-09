<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komen;

class ClientController extends Controller{

    function ShowBeranda(){
        $data['list_artikel'] = Artikel::all();
        return view ('template.frontview.beranda', $data);
    }
    function ShowBlog(){
        $data['list_artikel'] = Artikel::all();
        return view ('template.frontview.blog', $data);
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        $data['list_komen'] = Komen::all();
        return view ('template.frontview.detailblog', $data);
    }
}