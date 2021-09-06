<x-layout>
    <x-slot name="title">{{ __('Contactez-nous | Marché des gourmets') }}</x-slot>
    <x-slot name="head"></x-slot>

    <x-slot name="content">

        <!-- header -->
        <x-header></x-header>

        <main class="main">
            <section class="main__tickets tickets special_tickets">
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
        <footer>

        </footer>
    </x-slot>

    <x-slot name="script"></x-slot>
</x-layout>

