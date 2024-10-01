@extends('base')
@section('title') @endsection
@section('description')@endsection
@section('keywords')

@endsection
@section('content')



    <section>
        <div class="tf-container full">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('assets/images/slide/banner.jpg')}}" alt="Cover designed by Freepik" height="135" style="height: 520px">
                </div>
            </div>
        </div>
    </section>

    <section class="tour-single">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav justify-content-between tab-tour-single" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-information-tab" data-bs-toggle="pill" data-bs-target="#pills-information" type="button" role="tab" aria-controls="pills-information" aria-selected="true"><i class="icon-Vector-51"></i> Information</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pd-main">
                <div class="col-lg-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab" tabindex="0">
                            <div class="row mb-50">
                                <div class="col-lg-12">
                                    <div class="inner-heading-wrap flex-two">
                                        <div class="inner-heading">
                                            <span class="feature">Featured</span>
                                            <h2 class="title">Carte de Résidence pour Investisseurs</h2>
                                            <ul class="flex-three list-wrap-heading">
                                                <li class="flex-three">
                                                    <i class="icon-time-left"></i>
                                                    <span>2 Ans</span>
                                                </li>
                                                <li class="flex-three">
                                                    <i class="icon-user"></i>
                                                    <span>Max Guests: 12</span>
                                                </li>
                                                <li class="flex-three">
                                                    <i class="icon-18"></i>
                                                    <span>1421 San Pedro St, Los Angeles, CA</span>
                                                </li>


                                            </ul>

                                        </div>
                                        <div class="inner-price">
                                            <div class="flex-three">
                                                <div class="start">
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                    <i class="icon-Star"></i>
                                                </div>
                                                <span class="review">(1 Review)</span>
                                            </div>
                                            <p class="price-sale text-main">$130.00 <span class="price">$16000</span></p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="row mb-40 image-gallery-single">
                                <div class="col-12 col-sm-6">
                                    <img src="./assets/images/destination/1.jpg" alt="image">
                                </div>
                                <div class="col-6 col-sm-3">
                                    <img src="./assets/images/destination/2.jpg" alt="image">
                                </div>
                                <div class="col-6 col-sm-3">
                                    <img src="./assets/images/destination/3.jpg" alt="image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="information-content-tour">
                                        <div class="description-wrap mb-40">
                                            <span class="description">Description:</span>
                                            <p class="des">Le visa de résident pour les investisseurs à Dubaï est une opportunité idéale pour ceux qui souhaitent s'établir dans cet émirat dynamique tout en réalisant des investissements significatifs.
                                                Ce programme attire de nombreux expatriés grâce à ses avantages attractifs et à son processus d'application relativement simple.</p>
                                        </div>
                                        <div class="expect-wrap">
                                            <h4 class="title mb-40">Processus de Demande</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="listing-icon">
                                                        <li class="flex-three">
                                                            <i class="icon-10"></i>
                                                            <p>Preuves d'investissement (contrats de propriété, relevés bancaires).</p>
                                                        </li>
                                                        <li class="flex-three">
                                                            <i class="icon-10"></i>
                                                            <p>Passeport valide et photos d'identité.</p>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="listing-icon">

                                                        <li class="flex-three">
                                                            <i class="icon-10"></i>
                                                            <p>Soumission de la Demande : La demande peut être soumise en ligne ou via les centres d'immigration de Dubaï.</p>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-4">
                                                    <ul class="listing-icon">
                                                        <li class="flex-three">
                                                            <i class="icon-10"></i>
                                                            <p>Délai de Traitement : Le traitement des demandes prend généralement quelques semaines.</p>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <p>
                                                Le visa de résident pour les investisseurs à Dubaï est une option attrayante pour ceux qui souhaitent tirer parti des opportunités économiques de la région. En investissant dans l'immobilier ou en créant une entreprise, les investisseurs peuvent non seulement s'établir dans un environnement dynamique, mais aussi profiter de nombreux avantages liés à la résidence.
                                                Pour naviguer efficacement dans le processus, il est conseillé de consulter un expert en immigration.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="side-bar-right">
                                        @include('includes.ask_visa_form',['type_visa'=>'Carte de Résidence pour Professionnels'])
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('includes._trial')



@endsection
