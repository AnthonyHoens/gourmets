<x-layout>
    <x-slot name="title">{{ __('Plan du salon | Marché des gourmets') }}</x-slot>
    <x-slot name="head"></x-slot>

    <x-slot name="content">

        <!-- header -->
        <x-header></x-header>

        <main class="main">
            <div class="main__container">
                <section class="main__seating seating special_seating">
                    <h2 role="heading" aria-level="2" class="seating__title">
                        Plan de salon
                    </h2>
                    <div class="seating__img">
                        <img src="{{ asset('parts/img/plan.jpg') }}" alt="Image du plan du salon du 20ème marché des gourmets">
                    </div>
                </section>

                <section class="main__exhibitors exhibitors special_seating">
                    <h2 role="heading" aria-level="2" class="exhibitors__title">
                        Liste des exposants
                    </h2>
                    <div class="exhibitors__form_container">
                        <form action="#" method="get" class="exhibitors__search">
                            <label for="search" class="sr-only">Rechercher</label>
                            <input type="search" placeholder="Rechercher un exposant" name="search" id="search">

                            <button>
                                <img src="{{ asset('parts/img/search.svg') }}" alt>
                            </button>
                        </form>
                    </div>

                    <ul class="exhibitors__groupList">
                        <!-- Un Exposant -->
                        @foreach($exhibitors as $exhibitor)
                            <li class="exhibitors__list">
                                <x-exhibitor class="exhibitors__exhibitor exhibitor" :exhibitor="$exhibitor" :tags="false"></x-exhibitor>
                            </li>
                        @endforeach
                    </ul>

                    <x-btn :href="route('exhibitor.index')">Voir tout les exposants</x-btn>
                </section>
            </div>
        </main>
    </x-slot>

    <x-slot name="script"></x-slot>
</x-layout>

