@extends('base')
@section('title')

@endsection
@section('keywords')

@endsection
@section('description')

@endsection
@section('content')


            <!-- Widget Slider -->
            <section class=" relative overflow-hidden">
                <div class="slider-home2-image">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-home2">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/slide/slider_dubai.jpg')}}"
                                                 class="image-slider-home2 relative" alt="Image slider">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('assets/images/slide/slide_dubai2.jpg')}}"
                                                 class="image-slider-home2 relative" alt="Image slider">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next next-slider2"></div>
                                    <div class="swiper-button-prev prev-slider2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.main-banner-wrapper -->
                    </div>
                </div>
                <div class="slider-home2-content">
                    <img src="{{asset('assets/images/slide/borderhome.png')}}" alt="Image" class="mask-slide2">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12 center relative z-index3">
                                <img src="{{asset('assets/images/page/mask-bcrumb.png')}}" alt="Image"
                                     class="mask-slide2-flan">
                                <span class="sub-title text-main font-yes fs-28-46 wow fadeInUp animated">Vivez le rêve à Dubaï !</span>
                                <h1 class="banner-text title-slide text-white mb-45 wow fadeInUp animated">Obtenez votre visa de résidence facilement et rapidement.
                                </h1>
                                <div class="search-form-widget-slider relative wow fadeInUp animated">
                                    @include('includes.search_visa')
                                </div>
                                <div class="tour-list wow fadeInUp animated">
                                    <ul class="flex-five ">
                                        <li>
                                            <i class="icon-Vector-5"></i>
                                            <span>Expertise locale</span>
                                        </li>
                                        <li>
                                            <i class="icon-Vector-5"></i>
                                            <span>Tarification transparente </span>
                                        </li>
                                        <li>
                                            <i class="icon-Vector-5"></i>
                                            <span>Assistance complète dans le processus</span>
                                        </li>
                                        <li>
                                            <i class="icon-Vector-5"></i>
                                            <span>Service client réactif</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Widget Slider -->

            <!-- Widget Brand logo -->
            <section class="relative mt-53">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12 relative center line-brand-logo mt-20 wow fadeInUp animated">
                            <div class="line"></div>
                            <p class="line-text">Nos partenaires</p>
                        </div>
                        <div class="col-lg-12 widget-brand-logo">
                            <div class="swiper brand-logo overflow-hidden">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/page/brand-logo.png')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset('assets/images/page/brand-logo.png')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/images/page/brand-logo.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/images/page/brand-logo.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/images/page/brand-logo.png" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="./assets/images/page/brand-logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Widget Brand logo -->

            <!-- Widget Banner Part -->
            <section class="banner-part">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-30 center">
                                    <span
                                        class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Obtenez Votre Visa de Résidence Facilement</span>
                                <h2 class="title-heading wow fadeInUp animated">Package promotionnel</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.1s">
                            <div class="banner-part-item booking-style-1 relative bg-part-gray overflow-hidden">
                                <div class="content relative z-index3">
                                    <span class="text-main sale-up mb-10">Save up to 25%</span>
                                    <a href="#" class="font-yes title"> Special <br> Offer</a>
                                    <a href="#" class="tour1 btn-booking mt-27">Booking Now <i
                                            class="icon-arrow-right"></i></a>
                                </div>

                                <img src="{{asset('assets/images/explore/ex-pl-1.png')}}" alt="image" class="mask-banner-part">
                                <span class="price-banner-part flex-five center">From 99$</span>
                                <img src="{{asset('assets/images/explore/mask-banner-part.png')}}" alt="image"
                                     class="mask-banner-bottom">
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.2s">
                            <div class="banner-part-item booking-style-2 relative bg-part-gray overflow-hidden">
                                <div class="content relative z-index3">
                                    <span class="text-main sale-up font-yes">This Week only</span>
                                    <a href="#" class="title"> Enjoy 50% Off</a>
                                    <p class="text-main mb-30">& Free cancelation</p>
                                    <a href="#" class="tour1 btn-booking ">Booking Now <i
                                            class="icon-arrow-right"></i></a>
                                </div>

                                <img src="./assets/images/explore/ex-pl2.jpg" alt="image" class="mask-banner-part">
                                <img src="./assets/images/explore/shape1.png" alt="image"
                                     class="banner-part-shape1">
                                <img src="./assets/images/explore/shape2.png" alt="image"
                                     class="banner-part-shape2">
                                <img src="./assets/images/explore/mask-banner-part.png" alt="image"
                                     class="mask-banner-bottom">
                                <div class="video-wrap">
                                    <a href="https://www.youtube.com/watch?v=n9LgeoJE4EI"
                                       class="widget-icon-video widget-videos flex-five z-index3">
                                        <i class="icon-Polygon-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp animated " data-wow-delay="0.3s">
                            <div class="banner-part-item booking-style-3 relative bg-part-blue overflow-hidden">
                                <div class="content z-index3 relative">
                                    <span class="text-main sale-up ">Australia Attraction</span>
                                    <a href="#" class="title"> The best, for less!</a>
                                    <p class="text-main mb-30">10% Off today</p>
                                    <a href="#" class="tour1 btn-booking ">Booking Now <i
                                            class="icon-arrow-right"></i></a>
                                </div>

                                <img src="./assets/images/explore/ex-pl-3.jpg" alt="image" class="mask-banner-part">
                                <img src="./assets/images/explore/shape3.png" alt="image"
                                     class="banner-part-shape1">
                                <img src="./assets/images/explore/mask-banner-part.png" alt="image"
                                     class="mask-banner-bottom">
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Widget Banner Part -->

            <!-- Widget About Us -->
            <section class="about-us-h2 pd-main relative">
                <img src="{{asset('assets/images/page/mask-ex.png')}}" alt="image" class="mask1-about">
                <img src="{{asset('assets/images/page/fly4.png')}}" alt="image" class="mask2-about">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-about-us relative">
                                <img src="{{asset('assets/images/page/vector3.png')}}" alt="image" class="mask1">
                                <img src="{{asset('assets/images/logo.png')}}" alt="image" class="mask2" style="height: 121px;width: 120px">
                                <img src="{{asset('assets/images/about-us/about.jpeg')}}" alt="image" class="image-main">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-about-us">
                                <div class="mb-50 pl-about">
                                        <span class="sub-title-heading text-main font-yes fs-28-46">Qui sommes nous</span>
                                    <h2 class="title-heading mb-18 wow fadeInUp animated">Obtenez Votre Visa de
                                        <span class="text-gray font-yes">Résidence</span> Facilement
                                    </h2>
                                    <p class="des-heading wow fadeInUp animated">Bienvenue sur notre site dédié à la vente de visas à Dubaï. Nous offrons une gamme complète de services pour vous aider à obtenir le visa dont vous avez besoin, que ce soit pour des raisons professionnelles, familiales ou d'investissement. Notre équipe d'experts en immigration est à
                                        votre disposition pour vous fournir des conseils personnalisés et un accompagnement tout au long de votre démarche</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-box-style-4 flex">
                                            <div class="icon flex-five">
                                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <mask id="mask0_95_95" style="mask-type:luminance"
                                                          maskUnits="userSpaceOnUse" x="0" y="0" width="33"
                                                          height="33">
                                                        <path d="M0 0H33V33H0V0Z" fill="white" />
                                                    </mask>
                                                    <g mask="url(#mask0_95_95)">
                                                        <path d="M16.5 19.0781V32.0332H32.0332V10.1191H28.166"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-miterlimit="10" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path d="M4.83398 10.1191H0.966797V32.0332H16.5V19.1426"
                                                              stroke="currentColor" stroke-width="1.5"
                                                              stroke-miterlimit="10" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path
                                                            d="M22.2419 7.54102H28.166V28.166H21.8654C19.4311 28.166 17.2698 29.7237 16.5 32.0332"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M10.7581 7.54102H4.83398V28.166H11.1346C13.5689 28.166 15.7302 29.7237 16.5 32.0332"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M16.4988 0.966797C12.1241 0.966797 9.33045 5.63275 11.3962 9.48892L16.4988 19.0137L21.6014 9.48892C23.6672 5.63275 20.8735 0.966797 16.4988 0.966797Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M18.4336 6.76758C18.4336 7.83544 17.5679 8.70117 16.5 8.70117C15.4321 8.70117 14.5664 7.83544 14.5664 6.76758C14.5664 5.69972 15.4321 4.83398 16.5 4.83398C17.5679 4.83398 18.4336 5.69972 18.4336 6.76758Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-miterlimit="10" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h6 class="title mb-15 wow fadeInUp animated"><a href="#">Compétence garantie</a>
                                                </h6>
                                                <p class="des wow fadeInUp animated">Profitez de notre expérience et de notre connaissance approfondie des lois et
                                                    réglementations en matière d'immigration à Dubaï </p>
                                            </div>

                                        </div>
                                      {{--  <div class="icon-box-style-4 flex">
                                            <div class="icon flex-five">
                                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_549_1112)">
                                                        <path
                                                            d="M25.7703 6.22184C25.7703 3.96049 23.9306 2.12073 21.6692 2.12073C19.4079 2.12073 17.5681 3.96049 17.5681 6.22184C17.5681 8.4832 19.4079 10.323 21.6692 10.323C23.9306 10.323 25.7703 8.4832 25.7703 6.22184ZM21.6692 8.2724C20.5386 8.2724 19.6187 7.35252 19.6187 6.22184C19.6187 5.09116 20.5386 4.17128 21.6692 4.17128C22.7999 4.17128 23.7198 5.09116 23.7198 6.22184C23.7198 7.35252 22.7999 8.2724 21.6692 8.2724Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M34.516 7.44586C33.6732 6.15353 31.9523 5.72052 30.5983 6.46009L23.5248 10.3233C22.8587 10.3233 11.1104 10.3233 10.4254 10.3233V1.02748C10.4254 0.461249 9.96639 0.00219727 9.40016 0.00219727H1.02528C0.459051 0.00219727 0 0.461249 0 1.02748V7.2475C0 7.81373 0.459051 8.27278 1.02528 8.27278H8.37482V33.9731C8.37482 34.5393 8.83387 34.9984 9.40009 34.9984C9.96632 34.9984 10.4254 34.5393 10.4254 33.9731V16.475H16.577V31.9225C16.577 34.5883 19.7404 35.9722 21.7034 34.2133C23.6645 35.9705 26.8298 34.5922 26.8298 31.9225V16.0054L33.648 11.5636C35.0261 10.6658 35.4146 8.82376 34.516 7.44586ZM2.05056 6.22215V2.05269H8.37482V6.22215H2.05056ZM23.754 32.9477C23.1887 32.9477 22.7287 32.4878 22.7287 31.9225C22.7287 31.1273 22.7287 26.4465 22.7287 25.7024C22.7287 25.1362 22.2697 24.6772 21.7034 24.6772C21.1372 24.6772 20.6782 25.1362 20.6782 25.7024V31.9225C20.6782 32.4878 20.2182 32.9477 19.6529 32.9477C19.0875 32.9477 18.6276 32.4878 18.6276 31.9225V22.6266H24.7793V31.9225C24.7793 32.4878 24.3193 32.9477 23.754 32.9477ZM32.5287 9.84542L25.2449 14.5906C24.9545 14.7799 24.7793 15.103 24.7793 15.4497V20.5761H18.6276V15.4497C18.6276 14.8834 18.1686 14.4244 17.6023 14.4244H10.4254V12.3738C24.3876 12.3299 23.8524 12.4809 24.2779 12.2484L31.5811 8.25972C32.0018 8.02992 32.5365 8.16444 32.7984 8.56601C33.0776 8.99403 32.957 9.56647 32.5287 9.84542Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_549_1112">
                                                            <rect width="35" height="35" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h6 class="title mb-15 wow fadeInUp animated"><a href="#">Trusted travel guide</a>
                                                </h6>
                                                <p class="des wow fadeInUp animated">Nous nous engageons à rendre le processus aussi simple et rapide que possible,
                                                    afin que vous puissiez vous concentrer sur votre nouvelle vie dans cette métropole dynamique. </p>
                                            </div>

                                        </div>--}}
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="about-us-list">
                                            <li class="flex-three wow fadeInUp animated">
                                                <span class="number">15+</span>
                                                <span class="experience">Années d'expérience</span>
                                            </li>
                                            <li class="flex-three wow fadeInUp animated">
                                                <span class="number">42+</span>
                                                <span class="experience">Membres de l'équipe</span>
                                            </li>
                                            <li class="flex-three wow fadeInUp animated">
                                                <span class="number">97+</span>
                                                <span class="experience">Visas traites</span>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Widget Brand Part -->


            <!-- Widget Feature -->
            <section class="widget-feature overflow-hidden pd-main relative">
                <div class="bg-ab-feature bg-1">
                    <img src="{{asset('assets/images/page/bg-feature.png')}}" alt="">
                </div>
                <div class="tf-container w-1456 z-index3 relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="center m0-auto w-text-heading mb-40">
                                    <span
                                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Packages visas</span>
                                <h2 class="title-heading wow fadeInUp animated">Nos differentes  <span
                                        class="text-gray font-yes">offres</span> de visa</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="new-york-tab-pane" role="tabpanel"
                                     aria-labelledby="new-york-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.1s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('investor')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/investor.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Associé(e) d'une société</span>
                                                    <h3 class="title-tour-list"><a href="{{route('investor')}}">Carte de Résidence pour Investisseurs</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>2 ans</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>1 - * Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.2s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('family_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/family.jpg')}}" alt="Image Listing">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Permet de faire venir des membres de la famille d’un résident</span>
                                                    <h3 class="title-tour-list"><a href="{{route('family_card')}}">Carte de Résidence Familiale</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 days</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.3s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('etudiant_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/student.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les étudiants inscrits dans des établissements d'enseignement à Dubaï</span>
                                                    <h3 class="title-tour-list"><a href="{{route('etudiant_card')}}">Carte de Résidence pour Étudiants</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 days</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('professional_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/professionel.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les personnes qui créent leur propre entreprise à Dubaï</span>
                                                    <h3 class="title-tour-list"><a href="{{route('professional_card')}}">Carte de Résidence pour Entrepreneurs</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 ans</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Persones</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('family_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/family.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les personnes de plus de 55 ans souhaitant s'installer à Dubaï</span>
                                                    <h3 class="title-tour-list"><a href="{{route('family_card')}}">Carte de Résidence pour Retraités</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 days</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('professional_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/entrepreneur.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les expatriés travaillant pour une entreprise basée à Dubaï</span>
                                                    <h3 class="title-tour-list"><a href="{{route('professional_card')}}">Carte de Résidence pour Professionnels</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 ans</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('freelance_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/freelance.jpg')}}" alt="Image Listing">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les travailleurs indépendants et freelances</span>
                                                    <h3 class="title-tour-list"><a href="{{route('freelance_card')}}">Carte de Résidence pour Freelancers</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 days</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Person</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 wow fadeInUp animated " data-wow-delay="0.4s">
                                            <div class="tour-listing box-sd">
                                                <a href="{{route('family_card')}}" class="tour-listing-image">
                                                    <div class="badge-top flex-two">
                                                        <span class="feature">Featured</span>
                                                        <div class="badge-media flex-five">
                                                            <span class="media"><i class="icon-Group-1000002909"></i>5</span>
                                                            <span class="media"><i class="icon-Group-1000002910"></i>2</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{asset('assets/images/services/conjoint.jpg')}}" alt="Cover designed by Freepik">

                                                </a>
                                                <div class="tour-listing-content">
                                                    <span class="map"><i class="icon-Vector4"></i>Pour les époux d'un résident de Dubaï</span>
                                                    <h3 class="title-tour-list"><a href="{{route('family_card')}}">Carte de Résidence pour Conjoint</a>
                                                    </h3>
                                                    <div class="review">
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <i class="icon-Star"></i>
                                                        <span>(1 Review)</span>
                                                    </div>
                                                    <div class="icon-box flex-three">
                                                        <div class="icons flex-three">
                                                            <i class="icon-time-left"></i>
                                                            <span>5 days</span>
                                                        </div>
                                                        <div class="icons flex-three">
                                                            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M4.34766 4.79761C4.34766 2.94013 5.85346 1.43433 7.71094 1.43433C9.56841 1.43433 11.0742 2.94013 11.0742 4.79761C11.0742 6.65508 9.56841 8.16089 7.71094 8.16089C5.85346 8.16089 4.34766 6.65508 4.34766 4.79761Z" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M9.5977 15.1797H2.46098C1.34827 15.1797 0.558268 14.0954 0.898984 13.0362C1.80408 10.222 4.57804 8.18566 7.69301 8.18566C9.17897 8.18566 10.5566 8.64906 11.6895 9.43922" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M17.1035 15.1797V9.02734" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.1797 12.1035H14.0273" stroke="currentColor" stroke-width="1.7" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            <span>12 Personnes</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-two">
                                                        <div class="price-box flex-three">
                                                            <p>A partir de <span class="price-sale">$169.00</span></p>
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="icon-bookmark">
                                                            <i class="icon-Vector-151"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Widget Feature -->

         @include('includes._trial')


            <!-- Widget Service -->
         {{--   <section class="widget-service">
                <div class="tf-container">
                    <div class="row al-i-end mb-40">
                        <div class="col-md-7">
                            <div class="">
                                    <span
                                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Explore
                                        the world</span>
                                <h2 class="title-heading wow fadeInUp animated">Great opportunity for <br><span
                                        class="text-gray font-yes">adventure</span> & travels</h2>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <p class="wow fadeInUp animated">Pellentesque habitant morbi tristique senectus netus et
                                malesuada
                                fames ac turp egestas. Aliquam viverra arcu. Donec aliquet blandit
                                enim feugiat mattis.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-ld-12 relative ">
                            <div class="swiper serviceSwiper relative overflow-hidden pb-60">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-adventures-1"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Adventure Plan</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-fire-2"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Secure Camping</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <svg width="69" height="55" viewBox="0 0 69 42" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M49.7274 35.8052H42.7663M49.7274 35.8052C49.7274 38.6871 52.0663 41.026 54.9482 41.026C57.83 41.026 60.1689 38.6871 60.1689 35.8052M49.7274 35.8052C49.7274 32.9234 52.0663 30.5845 54.9482 30.5845C57.83 30.5845 60.1689 32.9234 60.1689 35.8052M42.7663 35.8052H18.4026M42.7663 35.8052V11.4416M42.7663 35.8052H32.3247V11.4416H42.7663M42.7663 11.4416H53.2079L58.4287 21.8831M42.7663 11.4416H55.338C57.7152 11.4416 59.3928 9.1131 58.6445 6.8612L57.482 3.38068C57.0086 1.95714 55.6791 1 54.179 1H1V35.8052H7.96105M58.4287 21.8831L64.9407 24.4901C66.2633 25.0156 67.13 26.2999 67.13 27.72V32.3247C67.13 34.2494 65.5742 35.8052 63.6495 35.8052H60.1689M58.4287 21.8831H42.7663H32.3247M18.4026 35.8052C18.4026 38.6871 16.0637 41.026 13.1818 41.026C10.3 41.026 7.96105 38.6871 7.96105 35.8052M18.4026 35.8052C18.4026 32.9234 16.0637 30.5845 13.1818 30.5845C10.3 30.5845 7.96105 32.9234 7.96105 35.8052M7.96105 21.8831H25.3637V11.4416H7.96105V21.8831Z"
                                                        stroke="currentColor" stroke-width="1.8"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Trailers & RV Sports</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-cabin-1"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Luxury cabin</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-adventures-1"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Adventure Plan</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-fire-2"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Secure Camping</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <svg width="69" height="55" viewBox="0 0 69 42" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M49.7274 35.8052H42.7663M49.7274 35.8052C49.7274 38.6871 52.0663 41.026 54.9482 41.026C57.83 41.026 60.1689 38.6871 60.1689 35.8052M49.7274 35.8052C49.7274 32.9234 52.0663 30.5845 54.9482 30.5845C57.83 30.5845 60.1689 32.9234 60.1689 35.8052M42.7663 35.8052H18.4026M42.7663 35.8052V11.4416M42.7663 35.8052H32.3247V11.4416H42.7663M42.7663 11.4416H53.2079L58.4287 21.8831M42.7663 11.4416H55.338C57.7152 11.4416 59.3928 9.1131 58.6445 6.8612L57.482 3.38068C57.0086 1.95714 55.6791 1 54.179 1H1V35.8052H7.96105M58.4287 21.8831L64.9407 24.4901C66.2633 25.0156 67.13 26.2999 67.13 27.72V32.3247C67.13 34.2494 65.5742 35.8052 63.6495 35.8052H60.1689M58.4287 21.8831H42.7663H32.3247M18.4026 35.8052C18.4026 38.6871 16.0637 41.026 13.1818 41.026C10.3 41.026 7.96105 38.6871 7.96105 35.8052M18.4026 35.8052C18.4026 32.9234 16.0637 30.5845 13.1818 30.5845C10.3 30.5845 7.96105 32.9234 7.96105 35.8052M7.96105 21.8831H25.3637V11.4416H7.96105V21.8831Z"
                                                        stroke="currentColor" stroke-width="1.8"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Trailers & RV Sports</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tf-icon-box icon-box-style1 relative">
                                            <div class="icon">
                                                <i class="icon-cabin-1"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title-icon"><a href="#">Luxury cabin</a></h4>
                                                <p class="des-icon">Pellentesque habitant morbi tristique senectus
                                                    netus et
                                                    malesuada fames ac</p>
                                                <a href="#" class="icons-link">Booking Now <i
                                                        class="icon-Path-77287-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>--}}
            <!-- Widget Service -->

            <!-- Widget Feature -->
            <section class="widget-feature pd-main relative">
                <img src="{{asset('assets/images/page/shape5.png')}}" alt="image" class="feature-shape">
                <div class="tf-container">
                    <div class="row z-index3 relative">
                        <div class="col-md-5">
                            <div class="image-feature-wrap relative ">
                                <div class="image-feature relative overflow-hidden">
                                    <img src="{{asset('assets/images/page/explore.jpg')}}" alt="image" class="image">
                                    <img src="{{asset('assets/images/page/shape5.1.png')}}" alt="image" class="shape-image">
                                </div>
                                <div class="exploring flex-five center">
                                        <span class="font-yes text-white ">Offre limitée</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="content-feature-wrap">
                                <div class="mb-40">
                                        <span
                                            class="sub-title-heading text-main font-yes fs-28-46 wow fadeInUp animated">Transformez votre projet en réalité : visas pour Dubaï.</span>
                                    <h2 class="title-heading mb-18 wow fadeInUp animated">Avantages <br>
                                        <span class="text-gray font-yes">de l'obtention</span> du visa de Dubaï
                                    </h2>
                                    <p class="des-heading wow fadeInUp animated">
                                        Obtenir un visa pour Dubaï offre de nombreuses opportunités, que ce soit pour des expatriés,
                                        des investisseurs ou des entrepreneurs
                                    </p>
                                </div>
                                <div class="feature-list-wrap">
                                    <div class="feature-list">
                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-fire-2"></i>
                                            </div>
                                            <h6><a href="#">Entrepreneuriat</a></h6>
                                        </div>

                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-Group-21"></i>
                                            </div>
                                            <h6><a href="#">Investissement Immobilier</a></h6>
                                        </div>
                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-Group-3"></i>
                                            </div>
                                            <h6><a href="#">Excellent support</a></h6>
                                        </div>

                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-flexibility-1-1"></i>
                                            </div>
                                            <h6><a href="#">Avantages Fiscaux</a></h6>
                                        </div>

                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-high-quality-1"></i>
                                            </div>
                                            <h6><a href="#">Qualité de Vie</a></h6>
                                        </div>

                                        <div class="feature-list-iteam flex-three">
                                            <div class="icon flex-five">
                                                <i class="icon-coins-1"></i>
                                            </div>
                                            <h6><a href="#">Opportunités Professionnelles</a></h6>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
            <!-- Widget Feature -->

            <!-- Widget testimonial -->
            <section class="pd-main bg-1">
                <div class="tf-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="center m0-auto w-text-heading mb-40">
                                    <span
                                        class="sub-title-heading text-main fs-28-46 font-yes wow fadeInUp animated">Pourquoi Choisir Nos Services ?</span>
                                <h2 class="title-heading wow fadeInUp animated">Témoignages de Nos <span
                                        class="text-gray font-yes">Clients</span> Satisfaits</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 relative">
                            <div class="swiper testimonialSwiper overflow-hidden pb-60">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="widget-testimonial-style2 relative">
                                            <div class="flex-two mb-25">
                                                <div class="flex-three">
                                                    <div class="image">
                                                        <img src="{{asset('assets/images/page/avata.jpg')}}"
                                                             alt="Image Testimonial">
                                                    </div>
                                                    <div class="profile">
                                                        <h5 class="name">David EFASSI</h5>
                                                        <span class="job">Ceo & Founder</span>
                                                    </div>
                                                </div>
                                                <div class="icon-tes flex-five">
                                                    <i class="icon-Layer_x0020_1"></i>
                                                </div>
                                            </div>
                                            <p class="des">Grâce à votre équipe, j'ai pu obtenir mon visa de résidence en un temps record.
                                                Les conseillers ont été très professionnels et ont répondu à toutes mes questions. Je me sens enfin chez moi à Dubaï !"
                                            </p>
                                            <img src="./assets/images/testimonial/mask.png" class="mask-tes"
                                                 alt="Mask">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="widget-testimonial-style2 relative">
                                            <div class="flex-two mb-25">
                                                <div class="flex-three">
                                                    <div class="image">
                                                        <img src="./assets/images/testimonial/avata.jpg"
                                                             alt="Image Testimonial">
                                                    </div>
                                                    <div class="profile">
                                                        <h5 class="name">Derrick OURM</h5>
                                                        <span class="job">Freelance</span>
                                                    </div>
                                                </div>
                                                <div class="icon-tes flex-five">
                                                    <i class="icon-Layer_x0020_1"></i>
                                                </div>
                                            </div>
                                            <p class="des">Le processus de demande de visa semblait compliqué, mais votre soutien m'a vraiment facilité la tâche.
                                                Je recommande vivement vos services à quiconque envisage de vivre à Dubaï.
                                            </p>
                                            <img src="./assets/images/testimonial/mask.png" class="mask-tes"
                                                 alt="Mask">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="widget-testimonial-style2 relative">
                                            <div class="flex-two mb-25">
                                                <div class="flex-three">
                                                    <div class="image">
                                                        <img src="./assets/images/testimonial/avata.jpg"
                                                             alt="Image Testimonial">
                                                    </div>
                                                    <div class="profile">
                                                        <h5 class="name">Laura IYA</h5>
                                                        <span class="job">Commercante</span>
                                                    </div>
                                                </div>
                                                <div class="icon-tes flex-five">
                                                    <i class="icon-Layer_x0020_1"></i>
                                                </div>
                                            </div>
                                            <p class="des">Votre service client est exceptionnel ! J'ai eu quelques soucis avec ma demande, mais votre équipe a été rapide et efficace pour résoudre les problèmes. Je recommande fortement vos services.
                                            </p>
                                            <img src="./assets/images/testimonial/mask.png" class="mask-tes"
                                                 alt="Mask">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="widget-testimonial-style2 relative">
                                            <div class="flex-two mb-25">
                                                <div class="flex-three">
                                                    <div class="image">
                                                        <img src="./assets/images/testimonial/avata.jpg"
                                                             alt="Image Testimonial">
                                                    </div>
                                                    <div class="profile">
                                                        <h5 class="name">Sophie K</h5>
                                                        <span class="job">  </span>
                                                    </div>
                                                </div>
                                                <div class="icon-tes flex-five">
                                                    <i class="icon-Layer_x0020_1"></i>
                                                </div>
                                            </div>
                                            <p class="des">Un grand merci à votre équipe ! La procédure était simple grâce à votre accompagnement, et
                                                je suis maintenant installée à Dubaï avec mon mari. C'est un rêve devenu réalité !"
                                            </p>
                                            <img src="./assets/images/testimonial/mask.png" class="mask-tes"
                                                 alt="Mask">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Widget testimonial -->

@endsection
