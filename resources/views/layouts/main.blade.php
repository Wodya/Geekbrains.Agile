<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tree Shop Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('Images/icon/favicon.png')}}" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese"
        rel="stylesheet">

   <!-- Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('libs/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/animate/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/owl.carousel.min/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/jquery.mmenu.all/jquery.mmenu.all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/direction/css/noJS.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/prettyphoto-master/css/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/slick-sider/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/countdown-timer/css/demo.css')}}">


    <!-- Template CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->

    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')

    -->
</head>
<body class="home tree-shop-home has-header-sidebar product single-product">

<div class="yolo-site">
    <x-site-header></x-site-header>
    <div id="example-wrapper">
        @yield('content')
        <x-site-footer></x-site-footer>
    </div>
</div>
<div class="popup-wrapper">
</div>
<!-- .popup-wrapper-->
<div class="click-back-top-body">
    <button type="button" class="sn-btn sn-btn-style-17 sn-back-to-top fixed-right-bottom"><i
            class="btn-icon fa fa-angle-up"></i></button>
</div>

<!-- Vendor jQuery-->
<script type="text/javascript" src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/animate/wow.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/jquery.mmenu.all/jquery.mmenu.all.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/countdown/jquery.countdown.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/jquery-appear/jquery.appear.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/jquery-countto/jquery.countTo.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/direction/js/jquery.hoverdir.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/direction/js/modernizr.custom.97074.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/isotope/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/isotope/fit-columns.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/isotope/isotope-docs.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/mansory/mansory.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/prettyphoto-master/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/slick-sider/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/countdown-timer/js/jquery.final-countdown.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/countdown-timer/js/kinetic.js')}}"></script>
<script type="text/javascript" src="{{ asset('libs/owl.carousel.min/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/add_to_favor.js')}}"></script>

</body>
</html>
