@extends('template.base1')

@section('content')
<section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h5 class="page-title">Blog</h5>
                        <ul class="page-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title area end--> 
    
    <div class="blog-page-area pd-bottom-80">
        @foreach($list_artikel as $artikel)
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-top-50">
                    <div class="single-blog-inner">
                        <div class="thumb">
                        <img src="{{ url("public/$artikel->foto") }}" alt="{{$artikel->foto}}" class="img-fluid">
                        </div>
                        <div class="single-blog-details">
                            <div class="meta">
                                <span class="author">
                                    <i class="fa fa-user"></i>
                                    {{$artikel->penulis}}
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    {{ $artikel->created_at->diffForHumans()  }}
                                </span>
                                <span class="comments">
                                    <i class="fa fa-comments"></i>
                                    Comments 
                                </span>
                            </div>
                            <h3><a href="{{url('detailblog', $artikel->id)}}">{{$artikel->judul}}</a></h3>
                            <p>  {{ substr($artikel->isi, 0, 1000) }} <b>Baca Selengkapnya...</b> </p>
                            <a class="btn btn-base" href="{{url('detailblog', $artikel->id)}}">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
@endsection