<!-- Banner area start here -->
<section class="banner-inner-area sub-bg bg-image" data-background="{!! asset('assets/images/bg/banner-inner-bg.png') !!}">
    <div class="banner-inner__shape1">
        <img class="animation__sunMove" src="{!! asset('assets/images/shape/banner-inner-shape1.png') !!}" alt="image">
    </div>
    <div class="banner-inner__shape2">
        <img src="{!! asset('assets/images/shape/banner-inner-shape2.png') !!}" alt="image">
    </div>
    <div class="banner-inner__shape3">
        <img class="animation__arryLeftRight" src="{!! asset('assets/images/shape/banner-inner-shape3.png') !!}" alt="image">
    </div>
    <div class="banner-inner__shape4">
        <img class="animation__arryUpDown" src="{!! asset('assets/images/shape/banner-inner-shape4.png') !!}" alt="image">
    </div>
    <div class="banner-inner__shape5">
        <img src="{!! asset('assets/images/shape/banner-inner-shape5.png') !!}" alt="image">
    </div>
    <div class="banner-inner__circle">
        <img class="slide-effect1" src="{!! asset('assets/images/shape/banner-circle.png') !!}" alt="image">
    </div>
    <div class="banner-inner__circle2">
        <img class="slide-effect2" src="{!! asset('assets/images/shape/banner-inner-circle2.png') !!}" alt="image">
    </div>
    <div class="banner-inner__dots">
        <img class="pxl-image-zoom" src="{!! asset('assets/images/shape/banner-inner-dots.png') !!}" alt="image">
    </div>
    <div class="container">
        <div class="banner-inner__content">
            <h1>
                {!! $title !!}
            </h1>
            <ul>
                <li><a href="{!! route('home') !!}">{!! __('site.home') !!}</a></li>
                <li><i class="fa-regular fa-angle-right"></i></li>
                <li> {!! $title !!}</li>
            </ul>
        </div>
    </div>
</section>
<!-- Banner area end here -->



