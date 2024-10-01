<section class="about-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about__left-part">
                    <div class="about__image">
                        <img class="about-dots sway__animation" src="{!! asset('assets/images/shape/about-dots.png') !!}"
                             alt="shape">
                        <img class="about-circle" src="{!! asset('assets/images/shape/about-circle.png') !!}" alt="shape">
                        <img src="{!! asset('assets/images/site/about1.png') !!}" alt="Structure de Procédure Consulaire au Congo - Services et Assistance Administrative">
                        <img class="sm-image" src="{!! asset('assets/images/site/about2.png') !!}" alt="Support pour les démarches consulaires en République Démocratique du Congo">
                        <div class="count-info">
                            <h5 class="primary-color fs-28"><span class="count primary-color">25</span>+</h5>
                            <span class="fs-14">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about__right-wrp">
                    <div class="section-header">
                        <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! __('site.about.title') !!}</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">{!! __('site.about.title1') !!}  <span><img src="{!! asset('assets/images/shape/header-shape.png') !!}"
                                              alt="shape">{!! __('site.about.title2') !!}</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">{!! __('site.about.description') !!}</p>
                    </div>
                    <div class="about__right-part mt-30 wow fadeInDown" data-wow-delay="200ms"
                         data-wow-duration="1500ms">
                        <div class="about__info">
                            <div class="icon bg__1">
                                <img src="{!! asset('assets/images/icon/about-icon1.png') !!}" alt="icon">
                            </div>
                            <div>
                                <h4>{!! __('site.about.but') !!}</h4>
                                <p class="mt-10">{!! __('site.about.but_description') !!}</p>
                            </div>
                        </div>
                        <div class="about__info">
                            <div class="icon bg__2">
                                <img src="{!! asset('assets/images/icon/about-icon2.png') !!}" alt="icon">
                            </div>
                            <div>
                                <h4>{!! __('site.about.mission') !!}</h4>
                                <p class="mt-10">{!! __('site.about.mission_description') !!}</p>
                            </div>
                        </div>
                    </div>
                    <a href="{!! route('about') !!}" class="btn-one mt-50 wow fadeInDown" data-wow-delay="200ms"
                       data-wow-duration="1500ms">{!! __('site.about_us') !!}<i class="fa-light fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
