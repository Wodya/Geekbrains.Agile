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
    <header class="header yolo-header-style-4">
        <div class="mobile-menu">
            <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
            <div class="col-3 text-center">
                <div class="logo">
                    <h1><a href="{{route('catalog')}}"><img src="images/logo/logo.png" alt="logo"/></a></h1>
                </div>
            </div>
            <div class="col-3 text-right">
                <div class="header-right">
                    <div class="search-button-wrapper header-customize-item style-default">
                        <div class="icon-search-menu"><i class="wicon fa fa-search"></i></div>
                        <div class="yolo-search-wrapper">
                            <input id="search-ajax" placeholder="Enter keyword to search" type="search"/>
                            <button class="search"><i class="fa fa-search"></i></button>
                            <button class="close"><i class="pe-7s-close"></i></button>
                        </div>
                    </div>
                    <div class="shopping-cart-wrapper header-customize-item with-price">
                        <div class="widget_shopping_cart_content">
                            <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span
                                    class="total">0</span></div>
                            <div class="cart_list_wrapper">
                                <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                    <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                        <li class="empty">
                                            <h4>An empty cart</h4>
                                            <p>You have no item in your shopping cart</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sidebar">
            <div class="header-bottom">
                <div class="main-nav-wrapper">
                    <div class="header-left">
                        <nav id="primary-menu" class="main-nav">
                            <ul class="nav">
                                <li class="active menu-item menu-home">
                                    <a href="{{url('/')}}">На главную</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="example-wrapper">
        <p><a href="#favorModal" class="btn btn-primary" data-toggle="modal">Открыть модальное окно 1</a></p>
        <script type="text/javascript" src="{{ asset('libs/jquery/jquery.min.js')}}"></script>
        <div class="div-box">
            <div class="home-4-new-collections">
                <div class="container">
                    <h2 class="title-style title-style-1 text-center"><span class="title-left">Каталог </span><span class="title-right"> Комнатных растений</span></h2>
                    <div data-js-module="filtering-demo" class="big-demo go-wide">
                        <div class="filter-button-group button-group js-radio-button-group container">
                            <button data-filter="*" class="button is-checked" title='Показать все растения'>Все</button>
                            @foreach($tagsList as $tag)
                                <button data-filter=".{{$tag}}" class="button">{{$tag}}</button>
                            @endforeach
                        </div>
                        <!-- Проверка на добавление -->
                        @if(session()->has('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                    @endif
                    <!--  -->
                        <ul class="grid shortcode-product-wrap product-begreen columns-4">
                            @forelse ($plantsList as $plant)
                                <li data-category="outdoor" class="element-item product-item-wrap product-style_1 {{$plant->tagsList}}">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <div class="product-flash-wrap"></div>
                                            <div class="style-img-div">
                                                <img src="./Images/Small/{{$plant->photoSmallPath}}" alt="product1" class="style-img"/>
                                            </div>
                                            <a href="{{route('onePlant', ['id' => $plant->id])}}" class="product-link">
                                                <div class="product-hover-sign">
                                                    <hr/>
                                                    <hr/>
                                                </div></a>
                                            <div class="product-info">
                                                <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                                                    <h3>{{$plant->name}}</h3></a><span class="price"><span class="product-begreen-price-amount amount">{{$plant->shortInfo}}</span></span>
                                            </div>
                                            <div class="product-actions">
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                                    <div class="yith-wcwl-add-button show">
                                                        <a href="#" class="add_to_wishlist" data-id="{{$plant->id}}" data-isfavor="{{$plant->isFavor}}">
                                                            <i @if($plant->isFavor)class="fa fa-heart" aria-hidden="true" @else class="fa fa-heart-o" @endif}}></i> Добавить в избранное</a>
                                                    </div>
                                                </div>
                                                <div class="yith-wcwl-add-button show">
                                                    <a href="{{route('onePlant', ['id' => $plant->id])}}" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <h2>Что-то сломалось =(</h2>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        console.log($('#modalText').text());

        $('.add_to_wishlist').click(function (e){
            e.preventDefault();
            let isFavor = +$(this).data("isfavor");
            let url = '';

            if(isFavor === 1)
                url = "{{route('plant.removeFavor', ['userId'=>1, 'plantId'=>'plant_id_val'])}}";
            else
                url = "{{route('plant.addFavor', ['userId'=>1, 'plantId'=>'plant_id_val'])}}";

            url = url.replace('plant_id_val', $(this).data("id"));
            let element = $(this);
            let child = $(this).children('i').first();

            $.ajax({
                url: url,
                success: function(data) {
                    console.log(url);
                    child.removeAttr('class');
                    child.removeAttr('aria-hidden');
                    console.log(child);
                    if (isFavor === 1) {
                        child.addClass("fa fa-heart-o");
                        element.data("isfavor",0);
                        $('#modalText').text("Удалено из избранного");
                        $('#favorModal').modal('show');
                    }
                    else {
                        child.addClass("fa fa-heart");
                        child.attr("aria-hidden","true");
                        element.data("isfavor",1);
                        $('#modalText').text("Добавлено в избранное");
                        $('#favorModal').modal('show')
                    }
                    console.log(child);
                }
            });
        });
    </script>
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

<div id="favorModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Избранные растения</h4>
            </div>
            <div class="modal-body">
                <p id="modalText">One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>


