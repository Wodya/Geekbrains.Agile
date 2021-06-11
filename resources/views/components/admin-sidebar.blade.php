<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <br>
            <div class="header-logo" style="text-align: center">
                <h1><a href="{{route('catalog')}}"><img src="{{ asset('Images/logo/logo-footer.png')}}"
                            alt="logo" /></a>
                </h1>
            </div>
            <br>
            <li>
                <a href="{{route('catalog')}}"><i class="fa fa-dashboard"></i>Каталог</a>
            </li>
            <li>
                <a href="{{route('admin::plants::plantList')}}"><i class="fa fa-dashboard"></i> Список растений</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Выпадающее меню<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <p>Базовые категории</p>
                    </li>
                    <li>
                        <a href="#">Пункт меню</a>
                    </li>
                    <li>
                        <a href="#">Пункт меню</a>
                    </li>
                    <li>
                        <a href="#">Пункт меню</a>
                    </li>
                    <li>
                        <a href="#">Дополнительная панель<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Здесь будут ещё инструменты</a>
                            </li>
                            <li>
                                <a href="#">Здесь будут ещё инструменты</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>