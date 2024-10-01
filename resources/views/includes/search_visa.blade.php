
    <form action="/" id="search-form-slider">
        <div class="flex wd-search">
            <div class="form-group flex-six">
                <i class="icon-18"></i>
                <div class="search-bar-group">
                    <label>Type de visa</label>
                    <div class="nice-select" tabindex="0">
                        <span class="current">Carte de Résidence pour Investisseurs</span>
                        <ul class="list">
                            <li data-value="Carte de Résidence pour Investisseurs" class="option selected">Carte de Résidence pour Investisseurs
                            </li>
                            <li data-value="Carte de Résidence pour Professionnels" class="option">Carte de Résidence pour Professionnels</li>
                            <li data-value="Carte de Résidence pour Freelancers" class="option">Carte de Résidence pour Freelancers</li>
                            <li data-value="Carte de Résidence pour Entrepreneurs" class="option">Carte de Résidence pour Entrepreneurs</li>
                            <li data-value="Carte de Résidence pour Retraités" class="option">Carte de Résidence pour Retraités</li>
                            <li data-value="Carte de Résidence Familiale" class="option">Carte de Résidence Familiale</li>
                            <li data-value="Carte de Résidence pour Étudiants" class="option">Carte de Résidence pour Étudiants</li>
                            <li data-value="Carte de Résidence pour Conjoint" class="option">Carte de Résidence pour Conjoint</li>
                        </ul>
                    </div>

                </div>


            </div>
            <div class="form-group flex">
                <i class="icon-hiking-1-1 "></i>
                <div class="search-bar-group">
                    <label>Type</label>
                    <div class="nice-select" tabindex="0">
                        <span class="current">Nombre de personnes</span>
                        <ul class="list">
                            <li data-value="" class="option selected">Nombre de personnes</li>
                            <li data-value="01" class="option">01</li>
                            <li data-value="02" class="option">02</li>
                            <li data-value="03" class="option">03 >= </li>
                        </ul>
                    </div>

                </div>


            </div>
{{--            <div class="form-group flex">
                <i class=" icon-time-left "></i>
                <div class="search-bar-group">
                    <label>Duration</label>
                    <div class="nice-select" tabindex="0">
                        <span class="current">2-4 days tour</span>
                        <ul class="list">
                            <li data-value="" class="option selected">2-4 days tour</li>
                            <li data-value="booking" class="option">3-6 days tour</li>
                            <li data-value="booking" class="option">4-8 days tour</li>
                            <li data-value="booking" class="option">5-10 days tour</li>
                        </ul>
                    </div>

                </div>


            </div>--}}
            <div class="form-group flex">
                <i class="icon-user"></i>
                <div class="search-bar-group">
                    <label>Nombres de personnes</label>
                    <input type="text" value="0">
                </div>
            </div>
            <div class="form-group flex-two">
                <div class="icon-icon-filter">
                    <i class="icon-14"></i>
                </div>
                <a href="#" class="btn-search"><i class="icon-Vector5"></i>Demander</a>
            </div>
        </div>
      {{--  <div class="wd-search-form">
            <div class="input-group-grid">
                <fieldset class="group-select relative ">
                    <label>Filter By Price</label>
                    <div class="widget widget-price ">
                        <div id="slider-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 0%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 100%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                        <div class="slider-labels">
                            <div>
                                <input type="hidden" name="min-value" value="">
                                <input type="hidden" name="max-value" value="">
                            </div>
                            <div class="caption flex-three">
                                <p class="price-range">Price: </p>
                                <div class="number-range">
                                    <span id="slider-range-value1">$30</span>
                                    <span id="slider-range-value2">$2,000</span>
                                </div>
                            </div>

                        </div>
                    </div><!-- /.widget_price -->
                </fieldset>
                <fieldset class="group-select relative input-npd ">
                    <div class="search-bar-group relative">
                        <label>0</label>
                        <div class="nice-select" tabindex="0">
                            <span class="current">English</span>
                            <ul class="list">
                                <li data-value="" class="option selected focus">Language</li>
                                <li data-value="language1" class="option">Japan</li>
                                <li data-value="language2" class="option">Vietnames</li>
                                <li data-value="language3" class="option">Korea</li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="group-select relative input-npd ">
                    <div class="search-bar-group relative">
                        <label>Any</label>
                        <div class="nice-select" tabindex="0">
                            <span class="current">Month</span>
                            <ul class="list">
                                <li data-value="" class="option selected focus">Month</li>
                                <li data-value="month1" class="option">1 Month</li>
                                <li data-value="month2" class="option">2 Month</li>
                                <li data-value="month3" class="option">3 Month</li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="group-select relative input-npd">
                    <div class="search-bar-group relative">
                        <label>Any</label>
                        <div class="nice-select" tabindex="0">
                            <span class="current">Duration</span>
                            <ul class="list">
                                <li data-value="" class="option selected focus">Duration</li>
                                <li data-value="duration1" class="option">10-15 day</li>
                                <li data-value="duration2" class="option">15-30 day</li>
                                <li data-value="duration3" class="option">20-30 day</li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
                <div class="group-check-box-wrap">
                    <div class="checkbox">
                        <input id="check4" type="checkbox" name="check" value="check">
                        <label for="check4">Accepts Credit Cards</label>
                    </div>
                    <div class="checkbox">
                        <input id="check5" type="checkbox" name="check" value="check">
                        <label for="check5">Car Parking</label>
                    </div>
                </div>
                <div class="group-check-box-wrap">
                    <div class="checkbox">
                        <input id="check6" type="checkbox" name="check" value="check">
                        <label for="check6">Free Coupons</label>
                    </div>
                    <div class="checkbox">
                        <input id="check7" type="checkbox" name="check" value="check">
                        <label for="check7">Laundry Service</label>
                    </div>
                </div>
                <div class="group-check-box-wrap">
                    <div class="checkbox">
                        <input id="check8" type="checkbox" name="check" value="check">
                        <label for="check8">Outdoor Seating</label>
                    </div>
                    <div class="checkbox">
                        <input id="check9" type="checkbox" name="check" value="check">
                        <label for="check9">Reservations</label>
                    </div>
                </div>
                <div class="group-check-box-wrap">
                    <div class="checkbox">
                        <input id="check10" type="checkbox" name="check" value="check">
                        <label for="check10">Restaurant</label>
                    </div>
                    <div class="checkbox">
                        <input id="check11" type="checkbox" name="check" value="check">
                        <label for="check11">Smoking Allowed</label>
                    </div>
                </div>
            </div>
        </div>--}}

    </form>

