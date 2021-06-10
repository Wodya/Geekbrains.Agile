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
        <div class="header-logo">
            <h1><a href="{{route('catalog')}}"><img src="{{ asset('Images/logo/logo-footer.png')}}" alt="logo"/></a>
            </h1>
        </div>
        <div class="header-bottom">
            <div class="main-nav-wrapper">
                <div class="header-left">
                    <nav id="primary-menu" class="main-nav">
                        <ul class="nav">
                            <li class="active menu-item menu-home">
                                <a href="{{url('/')}}">На главную</a>
                            </li>
                            <li class="active menu-item menu-home">
                                <a href="{{route('catalog')}}">Каталог</a>
                            </li>

                            <li class="menu-item menu-blog">
                            <a href="{{route('myPlants.index')}}">Личный кабинет <br>
                            @auth 
                            <small class="text-muted text-capitalize">{{ Auth::user()->name }}</small>
                            
                            </a>
                            </li>
                            <li class="menu-item menu-blog">
                            <a href="{{route('calendar')}}">Календарь работ</a>
                            </li>

                            @if(\Auth::user()->hasRole('admin'))
                            <li class="menu-item menu-blog">
                                <a href="#">Админка</a>
                            </li>
                           @endif
                           @endauth
                        </ul>
                    </nav>
                    <!-- .header-main-nav-->
                </div>


                <div class="form-input">
                    <input type="text" placeholder="Search"/><a href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
