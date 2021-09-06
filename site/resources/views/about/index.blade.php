<x-layout>
    <x-slot name="title">{{ __('A propos | Marché des gourmets') }}</x-slot>
    <x-slot name="head"></x-slot>

    <x-slot name="content">
        <!-- header -->
        <x-header></x-header>

        <main class="main">
            <section class="main__organisation organisation special_organisation">
                <h2 aria-level="2" role="heading" class="organisation__title">
                    A propos de nous
                </h2>
                <div class="organisation__container">
                    <div class="organisation__img">
                        <img src="{{ asset('/parts/img/rotary_logo.svg') }}" alt="Logo du Rotary">
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
        </main>


    </x-slot>

    <x-slot name="script"></x-slot>
</x-layout>
