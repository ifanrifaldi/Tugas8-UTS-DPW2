@extends('template.base')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Data Product
                    <a href="{{url('admin/produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                </div>
                <div class="card-body">
                    <h1>{{$artikel->judul}}</h1>
                    <hr>
                    <p>
                        <b> {{$artikel->penulis}}</b>
                    </p>

                    <p>
                        {!! nl2br($artikel->isi) !!}
                    </p>
                    <p>
                    <img src="{{ url("public/$artikel->foto") }}" alt="{{$artikel->foto}}" class="img-fluid">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <div class="time-label">
                        <span class="bg-red">10 Feb. 2014</span>
                    </div>
                    @foreach($list_komen as $komen)
                    @if($komen->id_artikel == $artikel->id)
                    @if($komen->level == 1)
                    <div>
                        <i class="fas fa-envelope bg-blue"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                            <h3 class="timeline-header"><a href="#"> {{$komen->nama}}</a></h3>

                            <div class="timeline-body">
                               {{$komen->isi}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($komen->level == 2)
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>
                            <h3 class="timeline-header no-border"><a href="#"> {{$komen->nama}}</a></h3>
                            <div class="timeline-body">
                               {{$komen->isi}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @endforeach
                    <div>
                        <div class="timeline-item">
                            <form action="{{url('balas-komen')}}" method="post">
                                @csrf
                                <div class="timeline-body">
                                <input type="text" name="id_artikel" class="form-control" value="{{$komen->id_artikel}}" hidden>
                                <input type="text" name="nama" class="form-control" value="{{$komen->artikel->user->nama}}" hidden>
                                <input type="text" name="email" class="form-control" value="{{$komen->artikel->user->email}}" hidden>
                                <input type="text" name="isi" class="form-control">
                            </div>
                            <div class="timeline-footer">
                                <button class="btn btn-warning btn-sm">Send comment</button>
                            </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection