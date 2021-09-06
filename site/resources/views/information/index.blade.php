<x-layout>
    <x-slot name="title">{{ __('Informations pratiques | Marché des gourmets') }}</x-slot>
    <x-slot name="head"></x-slot>

    <x-slot name="content">

        <!-- header -->
        <x-header></x-header>

        <main class="main">
            <section class="main__info info special_info change_info">
                <h2 role="heading" aria-level="2" class="info__title">
                    Informations pratiques
                </h2>
                <div class="info__container">
                    <div class="info__map map">
                        <img src="{{ asset("parts/img/price.jpg") }}" alt="Prix des places du marché des gourmets">
                    </div>
                    <section class="info__gourmets gourmets">
                        <h3 aria-level="3" role="heading" class="gourmets__title sr-only">
                            Marché des gourmets
                        </h3>
                        <div class="gourmets__container">
                            <section class="gourmets__item item">
                                <h4 role="heading" aria-level="4" class="item__title">
                                    Prix des places
                                </h4>
                                <div class="item__group">
                                    <p class="item__semi_title">
                                        Adulte
                                    </p>
                                    <p class="item__price">
                                        6.00 &euro;
                                    </p>
                                </div>
                                <div class="item__group">
                                    <p class="item__semi_title">
                                        Enfant
                                    </p>
                                    <p class="item__price">
                                        0.00 &euro;
                                    </p>
                                </div>
                                <div class="item__small">
                                    <small>
                                        (en dessous de 16 ans)
                                    </small>
                                </div>
                            </section>
                            <section class="gourmets__item item">
                                <h4 role="heading" aria-level="4" class="item__title">
                                    Ouverture du marché
                                </h4>
                                <p class="item__text">
                                    Le samedi 13 février de <em>11:00 à 20:00</em>
                                </p>
                                <p class="item__text">
                                    Le dimanche 14 février de <em>10:00 à 19:00</em>
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </section>

            <section class="main__visitors visitors">
                <div class="visitors__info">
                    <h2 role="heading" aria-level="2" class="visitors__title">
                        Inauguration
                    </h2>
                    <p class="visitors__text">
                        L'inauguration se fera le samedi 13 février vers 12:00, il se fera sous la présence des autorités, durant l'inauguration, nous vous présenterons le marché des gourmets avec quelques apéritifs et du champagne, nous vous présenterons aussi les exposants qui seront présent à cet évènement.
                    </p>

                    <x-btn :href="route('exhibitor.index')">Voir les exposants</x-btn>
                </div>
                <div class="visitors__img_container">
                    <img src="{{ asset("parts/img/inauguration.jpg") }}" alt="" class="visitors__img">
                </div>
            </section>

            <section class="main__visitors visitors visitors_bcg">
                <div class="visitors__img_container">
                    <img src="{{ asset("parts/img/interdiction.jpg") }}" alt="" class="visitors__img">
                </div>

                <div class="visitors__info">
                    <h2 role="heading" aria-level="2" class="visitors__title">
                        Interdiction durant le marché
                    </h2>
                    <p class="visitors__text">
                        Durant ce marché, nous n'autorisons pas la présence d'animaux, de même, vous ne pourrez pas fumer directement dans le marché, un endroit sera prévu à cet effet.
                    </p>
                </div>
            </section>

            <section class="main__info info change_info">
                <h3 role="heading" aria-level="2" class="info__title">
                    Coordonées
                </h3>
                <div class="info__container">
                    <div class="info__map map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.0310995278187!2d5.571535351339589!3d50.62653907939943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f9f92b0ec893%3A0x6814372ecc1ccb63!2sQuai%20de%20Rome%2010%2C%204000%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1607436539452!5m2!1sfr!2sbe"
                                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map__iframe"></iframe>
                    </div>
                    <div class="info__gourmets gourmets">
                        <div class="gourmets__container">
                            <p class="special_item__text">
                                Rue Paix-Dieu 2<br>
                                4540 AMAY<br>
                                - BELGIQUE -<br>
                                Coord. 50.569664, 5.29457
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </x-slot>

    <x-slot name="script"></x-slot>
</x-layout>
