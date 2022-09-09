@extends('template.base')
@section('content')

   <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <h4>Edit Data User</h4>
      </div>
            <div class="card-body">
              <form action="{{ url('admin/user', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
              </div>

              <div class="form-group">
                  <label for="" class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" value="{{ $user->username }}">
              </div>

              <div class="form-group">
                  <label for="" class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" value="{{ $user->email }}">
              </div>

              <div class="form-group">
                  <label for="" class="control-label">Password</label>
                  <input type="password" class="form-control" name="password">
              </div>

              <div class="form-group">
                  <label for="" class="control-label">No Hp</label>
                  <input type="no_handphone" class="form-control" name="no_handphone">
              </div>

                <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i> Simpan </button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection