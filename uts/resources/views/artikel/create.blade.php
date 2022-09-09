@extends('Template.base')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              Tambah Artikel
            </div>
            <div class="card-body">
                <form action="{{url('admin/artikel')}}" method="post"  enctype="multipart/form-data">
                  @csrf
                  <input type="text" value="{{auth()->user()->id}}" name="id_user" hidden>
                  <div class="form-group">
                      <label for="" class="control-label">Judul</label>
                      <input type="text" class="form-control" name="judul">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Foto</label>
                      <input type="file" class="form-control " name="foto" accept=".png">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Penulis</label>
                      <input type="text" class="form-control" name="penulis">
                  </div>
                  <div class="form-group">
                      <label for="" class="control-label">Isi</label>
                      <textarea name="isi" class="form-control"></textarea>
                  </div>
                  <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection