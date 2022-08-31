@extends('template.base')
@section('content')

    <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <div class="col-md-8">
        <h4>Komentar</h4>
      </div>
    </div>
            <div class="card-body">
              <form action="{{ url('komen') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="control-label"><strong> Nama</strong></label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">
                        <strong>Komentar</strong> :
                    </label>
                    <br>
                    <textarea name="isi" name="" id="" cols="30" rows="10" class="form-control">

                </textarea>
                </div>

                <br>
                <button style="float: right" class="btn btn-primary"><i class="fa fa-save"></i>
                    Komentar</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection