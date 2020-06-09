{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head> --}}
<!doctype html>
<html class="no-js" lang="zxx" dir='rtl'>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>كتاب الخير</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" >
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    
</head>
<body>
    <div id="app">       
        <main class="">
            @yield('content')
        </main>
    </div>
    
    <!-- footer -->


    <!-- form itself end-->
    {{-- <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/form-logo.png" alt="">
                    </a>
                </div>
                <h3>Resistration</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form> --}}
    <!-- form itself end -->


    <!-- JS here -->
    <script src="{{ asset('mjs/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script  src="{{ asset('mjs/vendor/jquery-1.12.4.min.js') }}"></script>
    <script  src="{{ asset('mjs/popper.min.js') }}"></script>
    <script  src="{{ asset('mjs/bootstrap.min.js') }}"></script>
    <script  src="{{ asset('mjs/owl.carousel.min.js') }}"></script>
    <script  src="{{ asset('mjs/isotope.pkgd.min.js') }}"></script>
    <script  src="{{ asset('mjs/ajax-form.js') }}"></script>
    <script  src="{{ asset('mjs/waypoints.min.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.counterup.min.js') }}"></script>
    <script  src="{{ asset('mjs/imagesloaded.pkgd.min.js') }}"></script>
    <script  src="{{ asset('mjs/scrollIt.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.scrollUp.min.js') }}"></script>
    <script  src="{{ asset('mjs/wow.min.js') }}"></script>
    <script  src="{{ asset('mjs/nice-select.min.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.slicknav.min.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.magnific-popup.min.js') }}"></script>
    <script  src="{{ asset('mjs/plugins.js') }}"></script>
    <script  src="{{ asset('mjs/gijgo.min.js') }}"></script>

    <!--contact js-->
    {{-- <script  src="{{ asset('mjs/contact.js') }}"></script> --}}
    <script  src="{{ asset('mjs/jquery.ajaxchimp.min.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.form.js') }}"></script>
    <script  src="{{ asset('mjs/jquery.validate.min.js') }}"></script>
    <script  src="{{ asset('mjs/mail-script.js') }}"></script>

    <script  src="{{ asset('mjs/main.js') }}"></script>
</body>
</html>
