   <!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('frontend/js/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- ScrollUp Start Here -->
    <a href="{{ route('get.home') }}wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper parallaxie repeat-y bg-size-auto" data-bg-image="{{ asset('frontend/img/figure/page-bg.jpeg') }}">
        <!-- Header Area Start Here -->
        <header class="header-two">
            <div id="header-main-menu" class="header-main-menu header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static">
                            <div class="site-logo-mobile">
                                <a href="{{ route('get.home') }}" class="sticky-logo-light"><img src="{{ asset('frontend/img/logo-dark.png') }}" alt="Site Logo"></a>
                                <a href="{{ route('get.home') }}" class="sticky-logo-dark"><img src="{{ asset('frontend/img/logo-dark.png') }}" alt="Site Logo"></a>
                            </div>
                            <nav class="site-nav">
                                <ul id="site-menu" class="site-menu">
                                    <li>
                                        <a href="{{ route('get.home') }}">Trang chủ</a>
                                    </li>

                                    <li>
                                        <a href="#">Danh mục</a>
                                        <ul class="dropdown-menu-col-1">
                                            @foreach($categoriesGlobal ?? [] as $item)
                                                <li>
                                                    <a href="{{ route('get.category',['slug' => $item->c_slug]) }}">{{ $item->c_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                            <div class="nav-action-elements-layout1">
                                <ul>
                                    <li>
                                        <div class="cart-wrap cart-on-mobile d-lg-none">
                                            <div class="cart-info">
                                                <i class="flaticon-shopping-bag"></i>
                                                <div class="cart-amount"><span class="item-currency">$</span>00</div>
                                            </div>
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product1.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product2.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product3.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="{{ route('get.home') }}" class="item-btn">View Cart</a>
                                                        <a href="{{ route('get.home') }}" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @if (get_data_user('web'))
                                        <li>
                                            <a href="{{ route('get_user.home') }}"  class="login-btn" >
                                                <i class="flaticon-profile"></i>{{ get_data_user('web','name') }}
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('get.login') }}"  class="login-btn" >
                                                <i class="flaticon-profile"></i>Login
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="mob-menu-open toggle-menu">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="nav-action-elements-layout2">
                                <ul class="nav-social">
                                    <li><a href="{{ route('get.home') }}" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="skype"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="rss"><i class="fas fa-rss"></i></a></li>
                                    <li><a href="{{ route('get.home') }}" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="site-logo-desktop">
                                <a href="{{ route('get.home') }}" class="main-logo"><img src="{{ asset('frontend/img/logo-light.png') }}" alt="Site Logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="nav-action-elements-layout3">
                                <ul>
                                    <li>
                                        <div class="header-search-box">
                                            <a href="#search" title="Search" class="search-button">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="cart-wrap d-none d-lg-block">
                                            <div class="cart-info">
                                                <i class="flaticon-shopping-bag"></i>
                                                <div class="cart-amount"><span class="item-currency">$</span>00</div>
                                            </div>
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product1.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product2.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="{{ route('get.home') }}">
                                                            <img src="img/product/top-product3.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="{{ route('get.home') }}">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="{{ route('get.home') }}">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="{{ route('get.home') }}" class="item-btn">View Cart</a>
                                                        <a href="{{ route('get.home') }}" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
        @yield('content')

         <!-- Footer Area Start Here -->
        <footer class="ranna-bg-light">
            <div class="container">
                <div class="footer-logo">
                    <a href="{{ route('get.home') }}"><img src="{{ asset('frontend/img/logo-dark.png') }}" class="img-fluid" alt="footer-logo"></a>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{ route('get.home') }}">FACEBOOK</a></li>
                        <li><a href="{{ route('get.home') }}">TWITTER</a></li>
                        <li><a href="{{ route('get.home') }}">INSTAGRAM</a></li>
                        <li><a href="{{ route('get.home') }}">PINTEREST</a></li>
                        <li><a href="{{ route('get.home') }}">GOOGLEPLUS</a></li>
                        <li><a href="{{ route('get.home') }}">YOUTUBE</a></li>
                    </ul>
                </div>
                <div class="copyright">© All Right Reserved 2022</div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Search Box Start Here -->
    <div id="search" class="search-wrap">
        <button type="button" class="close">×</button>
        <form class="search-form" action="{{ route('get.search') }}" method="GET">
            <input type="search" value="" placeholder="Type here........" name="key" />
            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- Search Box End Here -->
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Login</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="login-form">
                        <input class="main-input-box" type="text" placeholder="User Name" />
                        <input class="main-input-box" type="password" placeholder="Password" />
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">Login</button>
                            <a href="{{ route('get.home') }}" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                        </div>
                    </form>
                    <label>Login connect with your Social Network</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="{{ route('get.home') }}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ route('get.home') }}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ route('get.home') }}" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ route('get.home') }}" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->
    <!-- Jquery Js -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Plugins Js -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Smoothscroll Js -->
    <script src="{{ asset('frontend/js/smoothscroll.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
