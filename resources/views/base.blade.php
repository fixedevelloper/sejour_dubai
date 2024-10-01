<!DOCTYPE html>
<html lang="{!! session('locale') !!}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Q65peJEa0gelkheVOIbosNiHLIkluEI6g17_ir3HzOM" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    <title> @yield('title') - GUEN'S EDUCATION</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="{!! asset('faicon.png') !!}">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3DTGNSX3F"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z3DTGNSX3F');
    </script>

</head>

<body class="body header-fixed ">

<div class="preload preload-container">
    <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
        <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
        <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
        <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
    </svg>
</div>
<div id="wrapper">
    <div id="pagee" class="clearfix">
@include('_partials._header')
        <main id="main">


    @yield('content')
</main>

@include('_partials._footer')
    </div></div>
        <a id="scroll-top" class="button-go"></a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="logo-canvas">
                    <img src="./assets/images/logo.png" alt="image">
                </div>
                <p class="des">The world’s first and largest digital market
                    for crypto collectibles and non-fungible
                </p>
                <ul class="canvas-info">
                    <li class="flex-three">
                        <i class="icon-noun-mail-5780740-1"></i>
                        <p>Info@webmail.com</p>
                    </li>
                    <li class="flex-three">
                        <i class="icon-Group-9"></i>
                        <p>684 555-0102 490</p>
                    </li>
                    <li class="flex-three">
                        <i class="icon-Layer-19"></i>
                        <p>6391 Elgin St. Celina, NYC 10299</p>
                    </li>
                </ul>
                <ul class="social flex-three">
                    <li>
                        <a href="#">
                            <i class="icon-icon-2"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-icon-1"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-8"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-6"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>


<!-- Jquery 3. 7. 1 Min Js -->
<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
<!-- Bootstrap min Js -->
<script src="{!! asset('assets/js/jquery.nice-select.min.js') !!}"></script>
<!-- Mean menu Js -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<!-- Swiper bundle min Js -->
<script src="{!! asset('assets/js/swiper-bundle.min.js') !!}"></script>
<!-- Counterup min Js -->
<script src="{!! asset('assets/js/swiper.js') !!}"></script>
<!-- Wow min Js -->
<script src="{!! asset('assets/js/wow.min.js') !!}"></script>
<!-- Magnific popup min Js -->
<script src="{!! asset('assets/js/jquery.magnific-popup.min.js') !!}"></script>
<!-- Nice select min Js -->
<script src="{!! asset('assets/js/plugin.js') !!}"></script>
<!-- Parallax Js -->
<script src="{!! asset('assets/js/price-ranger.js') !!}"></script>
<!-- Waypoints Js -->
<script src="{!! asset('assets/js/shortcodes.js') !!}"></script>
<!-- Script Js -->
<script src="{!! asset('assets/js/textanimation.js') !!}"></script>
<script src="{!! asset('assets/js/main.js') !!}"></script>
@stack('js')
</body>

</html>
