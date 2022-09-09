<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMII NEWS</title>
    
    <!-- favicon -->
    <!-- <link rel=icon href="{{url('public')}}/assets/img/favicon.png" sizes="20x20" type="image/png"> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('public')}}/assets/css/responsive.css">

</head>
<body>
    @include('template.frontview.header')
    <!-- navbar end -->

    <!-- banner area start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('template.utils.notif')
        </div>
      </div>
    </div>
    @yield('content')

    @include('template.frontview.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="{{url('public')}}/assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="{{url('public')}}/assets/js/main.js"></script>
</body>
</html>