<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar'? 'rtl' : 'ltr' }}">
    {{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() }}"> --}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ __('companyNameFullName') }}</title>
    <meta name="author" content="vecuro">
    <meta name="description" content="CIC - Company Formation, Immigration, Audit, Consulting Services">
    <meta name="keywords" content="CIC - Company Formation, Immigration, Audit, Consulting Services" />
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/logo.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/logo.png')}}">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/img/logo.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{asset('assets/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    {{-- <link rel="stylesheet" href="{{asset('assets/css/style{{ app()->getLocale() == 'ar' ? '-ar' : '' }}.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style' . (app()->getLocale() == 'ar' ? '-ar' : '') . '.css') }}">


</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home' , app()->getLocale()) }}"><img src="{{asset('assets/img/logo.png')}}" alt="CIC" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('home' , app()->getLocale()) }}">{{ __('home') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('about' , app()->getLocale()) }}">{{ __('aboutUs') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('services' , app()->getLocale()) }}">{{ __('services') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('projects' , app()->getLocale()) }}">{{ __('projects') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('blog' , app()->getLocale()) }}">{{ __('blog') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('contact' , app()->getLocale()) }}">{{ __('contact') }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    {{-- <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Ads , and notic here </p>
                    </div> --}}
                    <div class="col-lg-auto d-none d-lg-block">
                        <select name="language" id="language" required onchange="changeLanguage()">
                            <option selected disabled hidden>{{ app()->getLocale() === 'ar' ? 'العربية' : 'English'}}</option>
                            <option value="en">English</option>
                            <option value="ar">العربية</option>
                        </select>
                    </div>
                    <div class="col-lg-auto">
                        <div class="header-social style-white">
                            <span class="social-title">{{ __('followUs') }} </span>
                            {{-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a> --}}
                            <a target="blank" href="https://www.instagram.com/consultancy_integrated_company/?igsh=MXJseHJheGFjNHM5bQ%3D%3D#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-phone"></i></a>
                            <a href="#"><i class="fab fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{ route('home' , app()->getLocale()) }}"><img src="{{asset('assets/img/logo.png')}}" alt="CIC" class="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto header-info ">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">{{ __('callAnytime') }}</span>
                            <div class="header-info_link"><a href="tel:+971501459111">+971 50 145 9111</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">{{ __('mailUsForSupport') }}</span>
                            <div class="header-info_link"><a href="mailto:info@cicemirates.com">info@cicemirates.com</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-xl-flex">
                        <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">{{ __('officeAddress') }}</span>
                            <div class="header-info_link">{{ __('dubaiUAE') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        @include('header')
    </header>

        @yield('content')

        <footer class="footer-wrapper footer-layout1" data-bg-src="{{asset('assets/img/shape/bg-footer-1-1.jpg')}}">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm footer-info_group">
                            <div class="footer-info">
                                <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                                <div class="media-body">
                                    <span class="footer-info_label">{{ __('officeAddress') }}</span>
                                    <div class="footer-info_link">{{ __('dubaiUAE') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm footer-info_group">
                            <div class="footer-info">
                                <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                                <div class="media-body">
                                    <span class="footer-info_label">{{ __('workingHours') }}</span>
                                    <div class="footer-info_link">{{ __('workingDaysDtails') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm footer-info_group">
                            <div class="footer-info">
                                <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                                <div class="media-body">
                                    <span class="footer-info_label">{{ __('contactUs') }}</span>
                                    <div class="footer-info_link">
                                        <a href="mailto:info@cicemirates.com">info@cicemirates.com</a><br>
                                        <a href="tel:+971501459111">+971 50 145 9111</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-area">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-lg-4 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">{{ __('aboutUs') }}</h3>
                                <div class="vs-widget-about">
                                    <p class="footer-text">At CIC, we commit to providing top-notch business and immigration services to help your venture succeed in today's world.</p>
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">{{ __('quickLinks') }}</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="{{ route('about' , app()->getLocale()) }}">{{ __('aboutUs') }}</a></li>
                                        <li><a href="{{ route('services' , app()->getLocale()) }}">{{ __('services') }}</a></li>
                                        <li><a href="{{ route('projects' , app()->getLocale()) }}">{{ __('projects') }}</a></li>
                                        <li><a href="{{ route('contact' , app()->getLocale()) }}">{{ __('contact') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">{{ __('explore') }}</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="{{ route('media' , app()->getLocale()) }}">{{ __('packages') }}</a></li>
                                        <li><a href="{{ route('blog' , app()->getLocale()) }}">{{ __('blog') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-auto">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">{{ __('ourLocation') }}</h3>
                                <div class="footer-map">
                                    <iframe title="office location map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16773.966552420545!2d55.26389276316528!3d25.18500949349827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682def25f457%3A0x3dd4c4097970950e!2sBusiness%20Bay%20-%20Dubai!5e1!3m2!1sen!2sae!4v1737099257598!5m2!1sen!2sae"
                                    width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 <a class="text-white"
                        href="{{ route('home' , app()->getLocale()) }}">Consultancy Integrated Company</a>. All rights reserved.
                        <a class="text-white" href="https://tsdur.com/">BY TSDUR</a>
                    </p>
            </div>
        </div>
    </footer>

    <!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>



    <!--********************************
			Code End  Here
	******************************** -->


    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <!-- <script src="{{asset('assets/js/app.min.js')}}"></script> -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Layerslider -->
    <script src="{{asset('assets/js/layerslider.utils.js')}}"></script>
    <script src="{{asset('assets/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- WOW.js Animation -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>


    <script>
        function changeLanguage() {
            const selectedLanguage = document.getElementById("language").value;
            const currentUrl = window.location.href; // Get current URL
            const newUrl = currentUrl.replace(/\/(en|ar)/, '/' + selectedLanguage); // Replace locale in URL
            window.location.href = newUrl; // Redirect to new URL
        }
    </script>



</body>

</html>



