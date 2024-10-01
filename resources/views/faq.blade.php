@extends('base')
@section('title')Conseils d'orientation académique @endsection
@section('keywords')
    Questions fréquentes orientation scolaire en République Démocratique du Congo,
    Conseils d'orientation académique RDC,
    Réponses aux questions sur l'orientation scolaire au Congo,
    Orientation académique au Congo FAQ,
    Aide à l'orientation académique en République Démocratique du Congo,
    Questions courantes orientation éducative Congo,
    Informations sur l'orientation scolaire en RDC,
    Guide d'orientation académique au Congo
@endsection
@section('description')
    Consultez notre FAQ sur l'orientation académique au Congo pour trouver des réponses aux questions courantes sur
    les services d'orientation scolaire et les programmes éducatifs en République Démocratique du Congo
@endsection
@section('content')
    @include('_partials._banner',['title'=>__('site.faq.title')])
    <section class="faq-two-area pt-120 pb-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-header-three mb-40">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Faq’s</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.faq.title') !!} <span>Guen's <img
                                    src="{!! asset('assets/images/shape/header-shape.png') !!}" alt="shape"></span></h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {!! __('site.faq.questions.q1') !!}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r1') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="200ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {!! __('site.faq.questions.q2') !!}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r2') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                    {!! __('site.faq.questions.q3') !!}
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse"
                                 aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r3') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                    {!! __('site.faq.questions.q4') !!}
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                 aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r4') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 wow fadeInLeft" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                    <div class="faq-three__image">
                        <img class="w-100" src="{!! asset('assets/images/site/faq.png') !!}" alt="Questions fréquentes sur l'orientation académique au Congo">
                        <img class="dots1 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-top.png') !!}" alt="shape">
                        <img class="dots2 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-bottom.png') !!}" alt="shape">
                        <img class="shape1" src="{!! asset('assets/images/shape/faq-shape-bottom.png') !!}" alt="shape">
                        <img class="shape2 animation__arryUpDown" src="{!! asset('assets/images/shape/faq-shape-top.png') !!}"
                             alt="shape">
                    </div>
                </div>
            </div>
         {{--   <div class="row g-5">
                <div class="col-lg-6 order-1 order-lg-1 wow fadeInLeft" data-wow-delay="200ms"
                     data-wow-duration="1500ms">
                    <div class="faq-three__image">
                        <img class="w-100" src="{!! asset('assets/images/faq/faq-three-image.png') !!}" alt="image">
                        <img class="dots1 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-top.png') !!}" alt="shape">
                        <img class="dots2 pxl-image-zoom" src="{!! asset('assets/images/shape/faq-dots-bottom.png') !!}" alt="shape">
                        <img class="shape1" src="{!! asset('assets/images/shape/faq-shape-bottom.png') !!}" alt="shape">
                        <img class="shape2 animation__arryUpDown" src="{!! asset('assets/images/shape/faq-shape-top.png') !!}"
                             alt="shape">
                    </div>
                </div>
                <div class="col-lg-6 order-2 order-lg-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    {!! __('site.faq.questions.q1') !!}
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r1') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="200ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {!! __('site.faq.questions.q2') !!}
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r2') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingthree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                    {!! __('site.faq.questions.q3') !!}
                                </button>
                            </h2>
                            <div id="collapsethree" class="accordion-collapse collapse"
                                 aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r3') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow border-none wow fadeInDown" data-wow-delay="400ms"
                             data-wow-duration="1500ms">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
                                    {!! __('site.faq.questions.q4') !!}
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                 aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {!! __('site.faq.responses.r4') !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>--}}
        </div>
    </section>
@endsection
