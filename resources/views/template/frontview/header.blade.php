

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- header start -->
    <div class="navbar-area">
        <!-- topbar end-->
        <!-- adbar end-->

        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a href="index.html" img src="assets/img/log1.png" alt="img"style="20%"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                            <a class="main-logo" href="index.html"><img src="{{url('public')}}/assets/img/fann.png" alt="img" style="height: 30px;"></a>
                        </div>
                    </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="menu-item"> <a href="{{url('beranda')}}">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="menu-item"> <a href="{{url('blog')}}">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="menu-search-inner">
                        <form action="{{url('blog/filter')}}" method="post">
                            @csrf
                            <input type="text" name="nama" value="{{$nama ?? ""}}">
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="menu-item"> <a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>