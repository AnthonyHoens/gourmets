<x-layout>
    <x-slot name="title">{{ __('Accueil | Marché des Gourmets')}}</x-slot>
    <x-slot name="head"></x-slot>


    <x-slot name="content">
        <!-- header -->
        <x-header></x-header>

        <!-- main -->
        <main class="main">
            <section class="main__landing landing">
                <h1 role="heading" aria-level="1" class="landing__title">
                    Bienvenue sur le site du marché des gourmets
                </h1>
                <div class="landing__container container">
                    <p class="container__text">
                        Ici, vous pouvez vous inscrire pour exposer aux marchés des gourmets ou vous inscrire pour participer à l'évènement:
                    </p>
                    <ul class="container__groupList">
                        <li class="container__list">
                            <strong>Exposer aux marchés :</strong> <a href="{{ route('exhibitor.index') . '#exhib-form' }}">Inscrivez-vous</a> ici pour participer à la vente et/ou la degustation de vos produits.
                        </li>
                        <li class="container__list">
                            <strong>Participer aux marchés :</strong> <a href="{{ route('ticket.index') . '#ticket-form' }}">Inscrivez-vous</a> ici pour participer à l'évènement.
                        </li>
                    </ul>
                </div>
            </section>
            <section class="main__tips tips">
                <h2 role="heading" aria-level="2" class="tips__title sr-only">
                    Informations sur l'évènement
                </h2>
                <ul class="tips__groupList">
                    <li class="tips__list list">
                        <h3 role="heading" aria-level="3" class="list__title">
                            <strong>40</strong> Exposants
                        </h3>
                    </li>
                    <li class="tips__list list">
                        <h3 role="heading" aria-level="3" class="list__title">
                            <strong>5</strong> Restaurants
                        </h3>
                        <p>
                            Gastronomie & gourmandise
                        </p>
                    </li>
                    <li class="tips__list list">
                        <h3 role="heading" aria-level="3" class="list__title">
                            <strong>1</strong> Garderie
                        </h3>
                        <p>
                            Déposez vos enfants et passez une agréable soirée
                        </p>
                    </li>
                    <li class="tips__list list">
                        <h3 role="heading" aria-level="3" class="list__title">
                            + de <strong>250</strong> produits BIO
                        </h3>
                        <p>
                            Dégustez & emportez
                        </p>
                    </li>
                </ul>
            </section>
            <section class="main__seating seating">
                <h2 role="heading" aria-level="2" class="seating__title">
                    Plan de salon
                </h2>
                <div class="seating__img">
                    <img src="{{ asset('parts/img/plan.jpg') }}" alt="Image du plan du salon du 20ème marché des gourmets">
                </div>
            </section>
            <section class="main__exhibitors exhibitors home_exhibitors">
                <h2 role="heading" aria-level="2" class="exhibitors__title">
                    Exposants
                </h2>

                <ul class="exhibitors__groupList">
                    @foreach($exhibitors as $exhibitor)
                        <li class="exhibitors__list">
                            <x-exhibitor class="exhibitors__exhibitor exhibitor" :exhibitor="$exhibitor" :tags="true"></x-exhibitor>
                        </li>
                    @endforeach
                </ul>
                <x-btn :href="route('exhibitor.index')">Voir tous les participants</x-btn>
            </section>
            <section class="main__info info">
                <h2 role="heading" aria-level="2" class="info__title">
                    Informations
                </h2>
                <div class="info__container">
                    <article class="info__map map">
                        <h3 aria-level="3" role="heading" class="sr-only map__title">
                            Emplacement du marché des gourmets
                        </h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.0310995278187!2d5.571535351339589!3d50.62653907939943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f9f92b0ec893%3A0x6814372ecc1ccb63!2sQuai%20de%20Rome%2010%2C%204000%20Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1607436539452!5m2!1sfr!2sbe"
                                width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map__iframe"></iframe>
                    </article>
                    <section class="info__gourmets gourmets">
                        <h3 aria-level="3" role="heading" class="gourmets__title">
                            Marché des gourmets
                        </h3>
                        <div class="gourmets__container">
                            <section class="gourmets__day day">
                                <h4 role="heading" aria-level="4" class="day__title">
                                    Jour de l'évènement
                                </h4>
                                <p class="day__text">
                                    3, 4, 5, 6 mars 2021
                                </p>
                            </section>
                            <section class="gourmets__email email">
                                <h4 role="heading" aria-level="4" class="email__title">
                                    E-mail
                                </h4>
                                <p class="email__text">
                                    <a href="mailto:info@marchedesgourmets.be">info@marchedesgourmets.be</a>
                                </p>
                            </section>
                            <section class="gourmets__website website">
                                <h4 role="heading" aria-level="4" class="website__title">
                                    Site internet
                                </h4>
                                <p class="website__text">
                                    <a href="https://www.marchedesgourmets.be" target="_blank">www.marchedesgourmets.be</a>
                                </p>
                            </section>
                            <section class="gourmets__emplacement emplacement">
                                <h4 role="heading" aria-level="4" class="emplacement__title">
                                    Lieu
                                </h4>
                                <p class="emplacement__text">
                                    Rue Paix-Dieu 2<br>
                                    4540 AMAY
                                </p>
                            </section>
                            <section class="gourmets__tel tel">
                                <h4 role="heading" aria-level="4" class="tel__title">
                                    Numéro de téléphone
                                </h4>
                                <p class="tel__text">
                                    +32(0)4 87 54 96
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
                <x-btn :href="route('information.index')">En savoir plus</x-btn>
            </section>
            <section class="main__organisation organisation">
                <h2 aria-level="2" role="heading" class="organisation__title">
                    Organisation
                </h2>
                <div class="organisation__container">
                    <div class="organisation__img">
                        <img src="{{ asset('/parts/img/rotary_logo.svg') }}" alt="Logo du Rotary">
                        <img src="{{ asset('/parts/img/hepl_logo.svg') }}" alt="Logo de la Haute École de la Province de Liège">
                    </div>
                    <div class="organisation__text">
                        <p>
                            Le Marché des Gourmets est un événement annuel organisé par le Rotary Club de Flémalle sur le prestigieux site de l'abbaye de la Paix-Dieu afin d'obtenir des fonds pour aider les plus démunis.
                        </p>
                        <p>
                            En 2002 nous accueillions une étape du terroir de Wallonie organisée avec la participation de l'Office des Produits Wallons.
                        </p>
                        <p>
                            En 2003 nous inaugurions, en collaboration avec la Province de Liège, notre 1ère année du marché des produits des terroirs européens en accueillant notre 1er invité d'honneur, la province du Frioul.
                        </p>
                        <p>
                            Depuis lors, la fréquentation n'a cessé d'augmenter pour atteindre 4000 visiteurs et plusieurs pays et régions se sont succédés comme Invité d'honneur : l'Irlande, le Portugal, l'Italie, Les Pays-Bas, l'Espagne, l'Alsace, le terroir de Wallonie qui est revenu pour notre 10ème édition, le tour des terroirs de France, la Communauté Germanophone de Belgique, la Province de Liège dans le cadre du « Circuit Court », la Grèce.
                        </p>
                    </div>
                </div>
            </section>
            <section class="main__tickets tickets">
                <div class="tickets__title_container">
                    <h2 aria-level="2" role="heading" class="tickets__title">
                        Contactez-nous
                    </h2>
                </div>


                <section class="tickets__details details">
                    <h3 aria-level="3" role="heading" class="details__title">
                        Informations de contact
                    </h3>

                    <div class="details__container">
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                E-mail
                            </h4>
                            <p class="detail__text">
                                info@marchedesgourmets.be
                            </p>
                        </article>
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                Téléphone
                            </h4>
                            <p class="detail__text">
                                +32(0)475/311 105
                            </p>
                        </article>
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                Détails du compte
                            </h4>
                            <p class="detail__text">
                                c/o Philippe Vanstalle<br>
                                Quai de Rome, 10/23<br>
                                4000 Liège
                            </p>
                        </article>
                    </div>
                </section>

                <x-contact-form></x-contact-form>
            </section>
        </main>

        <!-- footer -->
        <footer>

        </footer>

    </x-slot>


    <x-slot name="script">
        <script src="{{ asset('js/tips.js') }}"></script>
    </x-slot>
</x-layout>
