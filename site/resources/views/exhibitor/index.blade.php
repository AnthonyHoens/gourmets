<x-layout>
    <x-slot name="title">{{ __('Exposants | Marché des Gourmets')}}</x-slot>
    <x-slot name="head"></x-slot>


    <x-slot name="content">

        <x-header></x-header>

        <main class="main">
            <section class="main__exhibitors exhibitors special_exhibitors">
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
                    <form action="#" method="get" class="exhibitors__sort">
                        <label for="sort" class="sr-only">Trier</label>
                        <select name="sort" id="sort">
                            <option value="">Trier</option>
                        </select>
                        <button>
                            <img src="{{ asset('parts/img/validate.svg') }}" alt>
                        </button>
                    </form>
                </div>

                <ul class="exhibitors__groupList">
                    <!-- Un Exposant -->
                    @foreach($exhibitors as $exhibitor)
                        <li class="exhibitors__list">
                            <x-exhibitor class="exhibitors__exhibitor exhibitor" :exhibitor="$exhibitor" :tags="true"></x-exhibitor>
                        </li>
                    @endforeach
                </ul>

                {{ $exhibitors->links() }}
            </section>
            <section class="main__visitors visitors">
                <div class="visitors__info">
                    <h2 role="heading" aria-level="2" class="visitors__title">
                        Devenir exposant
                    </h2>
                    <p class="visitors__text">
                        Au marché des gourmets, vous aurez l'occasion de <strong>devenir exposants</strong> pour pouvoir montrer vos produits aux personnes participant à l'évènement, si vous voulez devenir exposant aux marché des gourmets,
                        <a href="{{ route('exhibitor.index') . '#exhib-form' }}">remplissez le formulaire de candidature.</a>
                    </p>
                </div>
                <div class="visitors__img_container">
                    <img src="{{ asset("parts/img/ticket_landing.jpg") }}" alt="" class="visitors__img">
                </div>
            </section>
            <section class="main__tickets tickets">
                <div class="tickets__title_container">
                    <h2 aria-level="2" role="heading" class="tickets__title">
                        Formulaire de candidature
                    </h2>
                </div>

                <section class="tickets__details details">
                    <h3 aria-level="3" role="heading" class="details__title">
                        Détails de paiement
                    </h3>

                    <div class="details__container">
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                Prix du stand
                            </h4>
                            <p class="detail__text">
                                50 euros
                            </p>
                        </article>
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                Détails du compte
                            </h4>
                            <p class="detail__text">
                                ASBL Rotary de Flémalle
                            </p>
                            <p class="detail__text">
                                <strong>IBAN</strong> BE27 1430 8077 8873
                            </p>
                            <p class="detail__text">
                                <strong>BIC</strong> GEBABEBB
                            </p>
                        </article>
                    </div>

                </section>

                <form action="{{ route('new.exhibitor') }}" method="post" id="exhib-form" class="tickets__form form" enctype="multipart/form-data">
                    @csrf
                    <div class="form__field_container">
                        <label for="name" class="form__label">Nom & prénom</label>
                        <input id="name" name="name" class="form__input" type="text" placeholder="Écrivez votre nom" value="{{ old('name') }}">
                        @error('name')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="email" class="form__label">Adresse e-mail</label>
                        <input id="email" name="email" class="form__input" type="email" placeholder="Écrivez votre adresse e-mail" value="{{ old('email') }}">
                        @error('email')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="work_title" class="form__label">Métier</label>
                        <input id="work_title" name="work_title" class="form__input" type="text" placeholder="Écrivez votre métier" value="{{ old('work_title') }}">
                        @error('email')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="stand_name" class="form__label">Nom du stand</label>
                        <input id="stand_name" name="stand_name" class="form__input" type="text" placeholder="Écrivez le nom de votre stand" value="{{ old('stand_name') }}">
                        @error('stand_name')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="phone_number" class="form__label">Numéro de téléphone</label>
                        <input id="phone_number" name="phone_number" class="form__input" type="tel" placeholder="Écrivez votre numéro de téléphone" value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="file" class="form__label">Ajouter une image</label>
                        <input id="file" name="file" class="form__input" type="file">
                        @error('file')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__special_field_container">
                        <p class="form__label">Cochez ce que vous vendez</p>
                        <div class="form__tags">
                            @foreach($tags as $tag)
                                <div class="form__tag">
                                    <input type="checkbox" id="{{ strtolower($tag->name) }}" name="tags[]" value="{{ $tag->id }}">
                                    <label for="{{ strtolower($tag->name) }}" class="form__special_label">{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        @error('tags')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__special_field_container">
                        <label for="message" class="form__label">Décrivez votre stand</label>
                        <textarea id="message" name="message" class="form__input" cols="30" rows="10" placeholder="Écrivez votre description">{{ old('message') }}
                        </textarea>
                        @error('message')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form__submit_container">
                        <input type="submit" value="Soumettre" class="form__submit">
                    </div>
                </form>
            </section>
        </main>
        <footer>

        </footer>


    </x-slot>
    <x-slot name="script">

    </x-slot>
</x-layout>
