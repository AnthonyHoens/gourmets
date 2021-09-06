<x-layout>
    <x-slot name="title">{{ __('Billeterie | Marché des gourmets') }}</x-slot>
    <x-slot name="head"></x-slot>

    <x-slot name="content">

        <!-- header -->
        <x-header></x-header>

        <main class="main">
            <section class="main__visitors visitors special_visitors">
                <div class="visitors__info">
                    <h2 role="heading" aria-level="2" class="visitors__title">
                        Visiteurs
                    </h2>
                    <p class="visitors__text">
                        Au marché des gourmets, vous aurez l'occasion de devenir exposants pour pouvoir montrer vos produits aux personnes participant à l'évènement, si vous voulez devenir exposant aux marché des gourmets, cliquer sur le lien ci-desous
                    </p>
                </div>
                <div class="visitors__img_container">
                    <img src="{{ asset("parts/img/ticket_landing.jpg") }}" alt="" class="visitors__img">
                </div>
            </section>
            <section class="main__tickets tickets">
                <div class="tickets__title_container">
                    <h2 aria-level="2" role="heading" class="tickets__title">
                        Billeterie
                    </h2>
                </div>

                <section class="tickets__details details">
                    <h3 aria-level="3" role="heading" class="details__title">
                        Détails de paiement
                    </h3>
                    <div class="details__container">
                        <article class="details__detail detail">
                            <h4 aria-level="4" role="heading" class="detail__title">
                                Prix d'une place
                            </h4>
                            <p class="detail__text">
                                <strong>Adulte:</strong> 6 &euro;
                            </p>
                            <p class="detail__text">
                                <strong>Enfant:</strong> Gratuit
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

                <form action="{{ route('ticket.store') }}" method="post" id="exhib-form" class="tickets__form form">
                    @csrf
                    <div class="form__field_container">
                        <label for="name" class="form__label">Nom & prénom</label>
                        <input id="name" name="name" type="text"  class="form__input" value="{{ old('name') }}" placeholder="Écrivez votre nom">
                        @error('name')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field_container">
                        <label for="email" class="form__label">Adresse e-mail</label>
                        <input id="email" name="email" type="email" class="form__input" value="{{ old('email') }}" placeholder="Écrivez votre adresse e-mail">
                        @error('email')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <p class="form__label">Places</p>
                        <div class="form__price">
                            <label for="child_ticket" class="form__label form__special_label">Place enfants</label>
                            <p class="form__price_text">
                                0 &euro;
                            </p>
                            <input type="number" id="child_ticket" class="form__input form__special_input" name="child_ticket" min="0" value="{{ old('child_ticket') ? old('child_ticket') : '0' }}">
                        </div>
                        @error('child_ticket')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                        <div class="form__price">
                            <label for="parent_ticket" class="form__label form__special_label">Place adultes</label>
                            <p class="form__price_text">
                                6 &euro;
                            </p>
                            <input type="number" id="parent_ticket" class="form__input form__special_input" name="parent_ticket" min="0" value="{{ old('parent_ticket') ? old('parent_ticket') : '0' }}">
                        </div>
                        @error('parent_ticket')
                            <span class="form__error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <p class="form__label">
                            Total
                        </p>
                        <p class="form__price_text">
                            <span id="total_price">0</span> &euro;
                        </p>
                    </div>

                    <div class="form__submit_container">
                        <input type="submit" value="Payez vos places" class="form__submit">
                    </div>
                </form>
            </section>
        </main>
        <footer>

        </footer>
    </x-slot>

    <x-slot name="script">
        <script>
            const totalPrice = document.querySelector('#total_price');
            const input = [
                document.querySelector('#child_ticket'),
                document.querySelector('#parent_ticket'),
            ];

            input.forEach(i => {
                i.addEventListener('change', () => {
                    const childPrice = 0;
                    const parentPrice = 6;
                    let changeText = (input[0].value * childPrice) + (input[1].value * parentPrice);
                    totalPrice.innerHTML = changeText;
                });
            })

            window.addEventListener('load', () => {
                const childPrice = 0;
                const parentPrice = 6;
                let changeText = (input[0].value * childPrice) + (input[1].value * parentPrice);
                totalPrice.innerHTML = changeText;
            })
        </script>
    </x-slot>
</x-layout>

