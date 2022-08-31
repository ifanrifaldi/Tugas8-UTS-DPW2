@extends('template.base1')

@section('content')
    <div class="tranding-area pd-top-75 pd-bottom-50">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <!-- <div class="col-md-9">
                        <div class="nxp-tab-inner nxp-tab-post text-md-right">
                            <ul class="nav nav-tabs" id="enx1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="enx1-tab-1" data-toggle="pill" href="#enx1-tabs-1" role="tab" aria-selected="true">
                                        Entertainment
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-2" data-toggle="pill" href="#enx1-tabs-2" role="tab" aria-selected="false">
                                        Politics        
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-3" data-toggle="pill" href="#enx1-tabs-3" role="tab" aria-selected="false">
                                        Fashion        
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-4" data-toggle="pill" href="#enx1-tabs-4" role="tab" aria-selected="false">
                                        Tech        
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-5" data-toggle="pill" href="#enx1-tabs-5" role="tab" aria-selected="false">
                                        Shop        
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="tab-content" id="enx1-content">
                <div class="tab-pane fade show active" id="enx1-tabs-1" role="tabpanel">
                    <div class="row">
                    @foreach($list_artikel as $artikel)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{url('public')}}/assets/img/blog/nevada.jpg" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">New</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>{{ $artikel->created_at->diffForHumans()  }}</li>
                                            <li><i class="fa fa-user"></i> {{$artikel->penulis}}</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">{{$artikel->judul}} </a></h6>
                                    <p> {{ substr($artikel->isi, 0, 150) }} <b>Baca Selengkapnya...</b></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection