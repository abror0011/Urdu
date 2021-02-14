<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/user/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/user/css/magnific-popup.css">
    <link rel="stylesheet" href="/user/css/font-awesome.min.css">
    <link rel="stylesheet" href="/user/css/themify-icons.css">
    <link rel="stylesheet" href="/user/css/nice-select.css">
    <link rel="stylesheet" href="/user/css/flaticon.css">
    <link rel="stylesheet" href="/user/css/gijgo.css">
    <link rel="stylesheet" href="/user/css/animate.css">
    <link rel="stylesheet" href="/user/css/slicknav.css">
    <link rel="stylesheet" href="/user/css/style.css">
   {{-- <link rel="stylesheet" href="user/css/responsive.css">  --}}
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home') }}">
                                <div class="sidebar-brand-icon">
                                    <i class="fa fa-university text-primary fa-2x mb-3"></i>
                                </div>
                                <h2 class="text-primary">Urdu</h2>
                            </a>
                            {{-- <div class="logo">
                                <a href="index.html">
                                    <img src="user/img/logo.png" alt="">
                                </a>
                            </div> --}}
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="" href="{{route('home')}}">Bosh menyu</a></li>
                                        <li><a class="" href="{{route('news')}}">Yangiliklar</a></li>
                                        <li><a href="#">Biz haqimizda <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('about')}}">Loyiha haqida</a></li>
                                        
                                                <li><a href="{{route('help')}}">Yo'riqnoma</a></li>
                                                <li><a href="{{route('result')}}">Natija</a></li>
                                                <li><a href="{{route('form')}}">Anketa</a></li>
                                                <li><a href="{{route('contract')}}">Shartnoma</a></li>
                                                <li><a href="{{route('content')}}">Qilinadigan ishlar mazmuni</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('author')}}">Mualliflar</a></li>
                                        <li>                                   
                                            @if (Route::has('login'))
                                                <div class="top-right links">
                                                    @auth
                                                        <a  href="{{ route('admin.home') }}">Admin</a>
                                                        
                                                    @else
                                                        <a  href="{{ route('login') }}">Kirish</a>
                                                    
                                                    @endauth
                                                </div>
                                            @endif
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        {{-- <div class="col-xl-3 col-lg-3 d-none d-lg-block book_btn d-none d-lg-block">
                            @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ route('admin.home') }}">Home</a>
                                @else
                                
                                    <a class="bnt btn-sm btn-outline-primary" href="{{ route('login') }}">Kirish</a>
                        
                                    {{-- @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif --}}
                                {{-- @endauth --}}
                            {{-- </div> --}}
                        {{-- @endif --}}
                        {{-- </div>  --}}
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
 

              
@yield('content')


 <!-- footer start -->
 <footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo mr-5">
                            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home') }}">
                                <div class="sidebar-brand-icon">
                                    <i class="fa fa-university text-primary fa-2x mb-3"></i>
                                </div>
                                <h2 class="text-primary">Urdu</h2>
                            </a> 
                        </div>
                        
                        <p>
                               Urganch Davlat Unirevsiteti Jismoniy ma'daniyat fakulteti
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Biz haqimizda
                        </h3>
                        <ul>
                            <li><a href="{{route('about')}}">Loyiha haqida</a></li>
                            <li><a href="{{route('author')}}">Mualliflar</a></li>
                            <li><a href="{{route('help')}}">Yo'riqnoma</a></li>
                            <li><a href="{{route('result')}}">Natija</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Foydali havolalar
                        </h3>
                        <ul>
                            <li><a class="active" href="{{route('home')}}">Bosh menyu</a></li>
                            <li><a class="active" href="{{route('news')}}">Yangiliklar</a></li>
                            <li><a href="{{route('form')}}">Anketa</a></li>
                            <li><a href="{{route('contract')}}">Shartnoma</a></li>
                            <li><a href="{{route('content')}}">Qilinadigan ishlar mazmuni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                                Manzil
                        </h3>
                        <p>
                            Urganch Davlat Universiteti 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> Urdu | Jismoniy tarbiya fakulteti </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- link that opens popup -->



<!-- JS here -->
<script src="/user/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="/user/js/vendor/jquery-1.12.4.min.js"></script>
<script src="/user/js/popper.min.js"></script>
<script src="/user/js/bootstrap.min.js"></script>
<script src="/user/js/owl.carousel.min.js"></script>
<script src="/user/js/isotope.pkgd.min.js"></script>
<script src="/user/js/ajax-form.js"></script>
<script src="/user/js/waypoints.min.js"></script>
<script src="/user/js/jquery.counterup.min.js"></script>
<script src="/user/js/imagesloaded.pkgd.min.js"></script>
<script src="/user/js/scrollIt.js"></script>
<script src="/user/js/jquery.scrollUp.min.js"></script>
<script src="/user/js/wow.min.js"></script>
<script src="/user/js/nice-select.min.js"></script>
<script src="/user/js/jquery.slicknav.min.js"></script>
<script src="/user/js/jquery.magnific-popup.min.js"></script>
<script src="/user/js/plugins.js"></script>
<script src="/user/js/gijgo.min.js"></script>
<!--contact js-->
<script src="/user/js/contact.js"></script>
<script src="/user/js/jquery.ajaxchimp.min.js"></script>
<script src="/user/js/jquery.form.js"></script>
<script src="/user/js/jquery.validate.min.js"></script>
<script src="/user/js/mail-script.js"></script>

<script src="/user/js/main.js"></script>
<script>
$('#datepicker').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
    }
});
$('#datepicker2').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
    }

});
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>
</body>

</html>          