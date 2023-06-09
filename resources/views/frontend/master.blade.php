@php

    $all_categories = App\Models\Admin\Category::all();

@endphp

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Venam</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    </head>
    <body>

        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="B" class="letters-loading">
                            B
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="U" class="letters-loading">
                            U
                        </span>
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two">

            <!-- header-top -->
            <div class="header-top-area">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="header-top-left">
                                <ul>
                                    <li>
                                        <div class="ship-to">
                                            <span>Ship to</span>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{ asset('frontend_assets/img/icon/ship_flag.png')}}" alt=""> US/USD
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('frontend_assets/img/icon/australia.png')}}" alt="">AUS/USD</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('frontend_assets/img/icon/bng.png')}}" alt="">BNG/TK</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('frontend_assets/img/icon/india.png')}}" alt="">IN/RP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="heder-top-guide">
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Help
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="terms-conditios.html">Returns</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Privacy</a>
                                                    <a class="dropdown-item" href="terms-conditios.html">Terms</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        @auth
                                            <a href="my-account.html"><i class="flaticon-user"></i>Logout</a>
                                        @else
                                            <a href="my-account.html"><i class="flaticon-user"></i>Register</a>
                                            <span>or</span>
                                            <a href="my-account.html">Sign in</a>
                                        @endauth
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-end -->

            <!-- menu-area -->
            <div id="sticky-header" class="main-header menu-area">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('frontend_assets/img/logo/logo_black.png')}}" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="dropdown"><a href="#">PAGES</a>
                                                <ul class="submenu">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="terms-conditios.html">Terms and Conditions</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">BLOG</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Standard Blog</a></li>
                                                    <li><a href="blog-classic.html">Classic Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">SHOP</a>
                                                <ul class="submenu">
                                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="wishlist.html">Wishlist page</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">Checkout page</a></li>
                                                    <li><a href="order-completed.html">Order completed</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="special.html">SPECIAL</a></li>
                                            <li><a href="contact.html">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-two-arrows"></i></a></li>
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span class="cart-count">2</span></a>
                                                <span class="cart-total-price">$ 128.00</span>
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend_assets/img/product/cart_p01.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Charity Nike Brand Yellow T-Shirt</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="{{ asset('frontend_assets/img/product/cart_p02.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">BackPack For School Student</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="#">Shopping Cart</a>
                                                            <a class="red-color" href="#">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend_assets/img/logo/white_logo.png')}}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu-area-end -->

            <!-- header-search-area -->
            <div class="header-search-area d-none d-md-block">
                <div class="custom-container-two">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="header-category d-none d-lg-block">
                                <a href="#" class="cat-toggle"><i class="flaticon-menu"></i>ALL DEPARTMENT</a>
                                <ul class="category-menu">
                                    {{-- <li class="has-dropdown"><a href="#"><div class="cat-menu-img"><img src="{{ asset('frontend_assets/img/product/category_menu_img01.png')}}" alt=""></div> Western woman</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="dropdown-title">Accessories & Parts</li>
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Chargers</a></li>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-title">Electronic Cigarettes</li>
                                                    <li><a href="#">Audio & Video</a></li>
                                                    <li><a href="#">Televisions</a></li>
                                                    <li><a href="#">TV Receivers</a></li>
                                                    <li><a href="#">Projectors</a></li>
                                                    <li><a href="#">Audio Amplifier Boards</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="dropdown-title">Smart Electronics</li>
                                                    <li><a href="#">Cables & Adapters</a></li>
                                                    <li><a href="#">Batteries</a></li>
                                                    <li><a href="#">Chargers</a></li>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="dropdown-title">Portable Audio & Video</li>
                                                    <li><a href="#">Audio & Video</a></li>
                                                    <li><a href="#">Televisions</a></li>
                                                    <li><a href="#">TV Receivers</a></li>
                                                    <li><a href="#">Projectors</a></li>
                                                    <li><a href="#">Audio Amplifier Boards</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}

                                    @foreach ($all_categories as $key=>$category)

                                    @if ($key++ < 7)

                                    <li><a href="#"><div class="cat-menu-img"><img class="img-fluid" style="width: 40px;" src="{{ asset('uploads/category')}}/{{$category->category_image}}" alt=""></div> {{$category->category_name}}</a></li>

                                    @else
                                    <li>
                                        <ul class="more_slide_open">
                                            <li><a href="#"><div class="cat-menu-img"><img class="img-fluid" style="width: 40px;" src="{{ asset('uploads/category')}}/{{$category->category_image}}" alt=""></div> {{$category->category_name}}</a></li>
                                        </ul>
                                    </li>

                                    @endif
                                    @endforeach
                                    <li class="more_categories">More Categories<i class="fas fa-angle-down"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Search for your item's type.....">
                                        <select class="custom-select">
                                            <option selected="">All Categories</option>
                                            <option>Women's Clothing</option>
                                            <option>Men's Clothing</option>
                                            <option>Computer & Office</option>
                                            <option>Consumer Electronics</option>
                                            <option>Home & Garden</option>
                                            <option>Luggage & Bags</option>
                                            <option>Shoes</option>
                                            <option>Mother & Kids</option>
                                            <option>Beauty & Health</option>
                                            <option>Home Appliances</option>
                                            <option>Food</option>
                                            <option>Underwear & Sleepwear</option>
                                            <option>In All Categories</option>
                                        </select>
                                        <button><i class="flaticon-magnifying-glass-1"></i></button>
                                    </form>
                                </div>
                                {{-- <div class="header-free-shopping">
                                    <p>Free Shipping on Orders <span>$39+</span></p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-area-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

        @yield('content')


    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer-area">
        <div class="footer-top pt-65 pb-25">
            <div class="container">
                <div class="footer-newsletter-wrap footer-newsletter-two">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="newsletter-title">
                                <h4>Subscribe Now !</h4>
                                <span>Venam By Signing Up To Our Newsletter.</span>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email....">
                                    <button class="btn yellow-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-alphabet mb-55">
                    <div class="row">
                        <div class="col-12">
                            <div class="newsletter-title text-left mb-0">
                                <h4>Find Out More :</h4>
                                <span>Browse Alphabetically :</span>
                                <span><a href="#">A</a></span>
                                <span><a href="#">B</a></span>
                                <span><a href="#">C</a></span>
                                <span><a href="#">D</a></span>
                                <span><a href="#">E</a></span>
                                <span><a href="#">F</a></span>
                                <span><a href="#">G</a></span>
                                <span><a href="#">H</a></span>
                                <span><a href="#">I</a></span>
                                <span><a href="#">J</a></span>
                                <span><a href="#">K</a></span>
                                <span><a href="#">L</a></span>
                                <span><a href="#">M</a></span>
                                <span><a href="#">N</a></span>
                                <span><a href="#">O</a></span>
                                <span><a href="#">P</a></span>
                                <span><a href="#">Q</a></span>
                                <span><a href="#">R</a></span>
                                <span><a href="#">S</a></span>
                                <span><a href="#">T</a></span>
                                <span><a href="#">U</a></span>
                                <span><a href="#">V</a></span>
                                <span><a href="#">W</a></span>
                                <span><a href="#">X</a></span>
                                <span><a href="#">Y</a></span>
                                <span><a href="#">Z</a></span>
                                <span><a href="#">0~9</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-30">
                                <a href="index.html"><img src="img/logo/logo_black.png" alt=""></a>
                            </div>
                            <div class="footer-text mb-35">
                                <p>Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear
                                Blood Pressure Rate Monito.</p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Product Recalls</a></li>
                                    <li><a href="#">Accessibility</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Store Pickup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i> W898 RTower Stat, Suite 56
                                        Brockland, CA 9622 United States</li>
                                    <li><i class="fas fa-headphones"></i> 458-965-3224</li>
                                    <li><i class="fas fa-envelope-open"></i>Support@info.Com</li>
                                    <li><i class="fas fa-fax"></i>458-965-3224</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap copyright-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>Copyright © 2020 <a href="#">Venam</a> All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-none d-md-block">
                        <div class="payment-method-img text-right">
                            <img src="{{ asset('frontend_assets/img/images/card_img.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    {{-- {{ asset('frontend_assets/') }} --}}


    <!-- JS here -->
    <script src="{{ asset('frontend_assets/js/vendor/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
</body>
</html>
