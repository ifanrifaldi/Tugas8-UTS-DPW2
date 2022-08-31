@extends('template.base')
@section('content')

     <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <h4>Detail Data User</h4>
    </div>

         
            <div class="card-body">
              <h3>{{ $user->nama }}</h3>
              <hr>
              <p>{{"@".$user->username }} |
                email : {{ $user->email }} |
                No hp : {{ $user->Detail->no_handphone }} 
              
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection