<div class="sidebar-widget">
    <h6 class="block-heading">Effectuer une demande</h6>
    <form action="/" id="form-book-tour">
        <div class="input-wrap mb-30">
            <input type="date">
        </div>
        <div class="input-wrap mb-30">
            <label for="first">Prenom</label>
            <input type="text" name="last_name">
        </div>
        <div class="input-wrap mb-30">
            <label for="first">Nom</label>
            <input type="text" name="first_name">
        </div>
        <div class="input-wrap mb-30">
            <label for="first">Telephone</label>
            <input type="text" name="phone">
        </div>
        <input type="text" name="type_visa" hidden value="{{$type_visa}}">
{{--        <div class="flex-two mb-30">
            <span class="label">Time:</span>
            <div class="radio">
                <input id="first" type="radio" name="numbers" value="first" checked="">
                <label for="first">14.00</label>
                <input id="second" type="radio" name="numbers" value="second">
                <label for="second">16.00</label>
            </div>
        </div>--}}
{{--        <div class="input-wrap-sellect mb-30">
            <span class="label">Tickets:</span>
            <div class="flex-two mb-15">
                <p>Type de visa</p>
                <div class="nice-select" tabindex="0">
                    <span class="current">1</span>
                    <ul class="list">
                        <li data-value="Carte de Résidence pour Investisseurs" class="option selected focus">Carte de Résidence pour Investisseurs</li>
                        <li data-value="Carte de Résidence pour Professionnels" class="option">Carte de Résidence pour Professionnels</li>
                        <li data-value="Carte de Résidence pour Freelancers" class="option">Carte de Résidence pour Freelancers</li>
                    </ul>
                </div>
            </div>
            <div class="flex-two">
                <p>Adult (18+ years)$189.00</p>
                <div class="nice-select" tabindex="0">
                    <span class="current">1</span>
                    <ul class="list">
                        <li data-value="" class="option selected focus">1</li>
                        <li data-value="2" class="option">2</li>
                        <li data-value="3" class="option">3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="input-wrap-checkbox mb-30">
            <span class="label">Add Extra</span>
            <div class="checkbox">
                <input id="check" type="checkbox" name="check" value="check">
                <label for="check">Service per booking</label>
            </div>
            <div class="checkbox">
                <input id="check1" type="checkbox" name="check" value="check">
                <label for="check1">Service per person</label>
            </div>
            <div class="extra">
                <div class="flex-three">
                    <span class="name">Adult:</span>
                    <span class="price">$18.00</span>
                </div>
                <div class="flex-three">
                    <span class="name">Youth:</span>
                    <span class="price">$16.00</span>
                </div>
                <div class="flex-three">
                    <span class="name">Children:</span>
                    <span class="price">$16.00</span>
                </div>
            </div>
        </div>--}}
        <div class="flex-two mb-40">
            <span class="label">Type de visa:</span>
            <span class="total text-main">{{$type_visa}}</span>
        </div>
        <div class="flex-two mb-40">
            <span class="label">Total:</span>
            <span class="total text-main">$130.00</span>
        </div>
        <button type="submit">Demander le visa</button>

    </form>
</div>
<div class="sidebar-widget">
    <h6 class="block-heading">Book With Confidence</h6>
    <ul class="category-confidence">
        <li class="flex-three">
            <i class="icon-customer-service-1"></i>
            <span>Customer care available 24/7</span>
        </li>
        <li class="flex-three">
            <i class="icon-Vector-6"></i>
            <span>Hand-picked Tours &amp; Activities</span>
        </li>
        <li class="flex-three">
            <i class="icon-insurance-1"></i>
            <span>Free Travel Insureance</span>
        </li>
        <li class="flex-three">
            <i class="icon-price-tag-1-1"></i>
            <span>No-hassle best price guarantee</span>
        </li>
    </ul>
</div>
