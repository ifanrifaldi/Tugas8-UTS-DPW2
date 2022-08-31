@extends('Template.base')

@section('content')
            <div class="card-header">
              Tambah Data Artikel
            </div>
            <div class="card-body">
                <form action="{{url('artikel', $artikel->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                      <label for="" class="control-label">Judul</label>
                      <input type="text" class="form-control" name="judul">
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