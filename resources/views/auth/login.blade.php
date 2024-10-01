<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Vitour - Travel & Tour Booking HTML Template</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="{!! asset('assets/css/app.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/jquery.fancybox.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/images/favico.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png">

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

<!-- /preload -->

<div id="wrapper">
    <div id="pagee" class="clearfix">

        <!-- Main Header -->
    @include('_partials._header')
    <!-- End Main Header -->
        <main id="main">

            <section class="breadcumb-section">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12 center z-index1">
                            <h1 class="title">Connexion</h1>
                            <ul class="breadcumb-list flex-five">
                                <li><a href="#">Home</a></li>
                                <li><span>Connexion</span></li>
                            </ul>
                            <img class="bcrumb-ab" src="{{asset('assets/images/page/mask-bcrumb.png')}}" alt="">
                        </div>
                    </div>

                </div>
            </section>

            <section class="login">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-wrap flex">
                                <div class="image">
                                    <img src="{{asset('assets/images/page/sign-up.jpg')}}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="inner-header-login">
                                        <h3 class="title">Create an account to get started</h3>
                                        <div class="flex-three">
                                            <span class="sale">20% off</span>
                                            <p>get 20% off for web signup</p>
                                        </div>
                                    </div>
                                    <form action="/" id="sign-up" class="login-user">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-wrap">
                                                    <label>Name</label>
                                                    <input type="text" placeholder="Enter your name*">
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-wrap">
                                                    <label>Email</label>
                                                    <input type="email" placeholder="Enter your email*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-wrap">
                                                    <label>Phone Number</label>
                                                    <input type="tel" placeholder="Enter your Phone*">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-wrap">
                                                    <label>Your password</label>
                                                    <input type="password" placeholder="Enter your password*">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <button type="submit" class="btn-submit">Sign Up</button>
                                            </div>
                                            <div class="col-lg-12 mb-30">
                                                <div class="checkbox">
                                                    <input id="check-policy" type="checkbox" name="check"
                                                           value="check">
                                                    <label for="check-policy">By signing up, you agree to
                                                        Customers.ai’s Terms Of Service and Privacy Policy</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="flex-three">
                                                    <span class="account">Don,t you have an account?</span>
                                                    <a href="{{route('login')}}" class="link-login">Creer un compte</a>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    @include('_partials._footer')

    <!-- Bottom -->
    </div>
    <!-- /#page -->
</div>

<!-- Modal Popup Bid -->

<a id="scroll-top" class="button-go"></a>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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
                    <i class="icon-x"></i>
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
Z
