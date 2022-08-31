<?php 


namespace App\Http\Controllers;

use App\Models\Komen;

class KomenAdminController extends Controller {

    function index (){
      $data['list_komen'] = Komen::all();
      return view('komen.index', $data);
    }

    function store (){
    
      $komen = new Komen();
      $komen->nama = request('nama');
      $komen->id_artikel = request('id_artikel');
      $komen->email = request('email');
      $komen->isi = request('isi');
      $komen->level = 1;
      $komen->save();
  
      return redirect('komen');
    }

  function show(Komen $komen){
    $data['komen'] = $komen;
    return view('komen.show', $data);
  }
  
}