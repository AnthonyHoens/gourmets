<header class="header">
    <h1 role="heading" aria-level="1" class="header__title">
        <a href="{{ route('home.index') }}">
            20ème marché des gourmets, Produits des terroirs européens
            <svg xmlns="http://www.w3.org/2000/svg" width="220" height="79" viewBox="0 0 220 79">
                <g id="Groupe_3" data-name="Groupe 3" transform="translate(-90.839 -449.198)">
                    <text id="Gourmets" transform="translate(90.839 509.198)" font-size="60" font-family="Lobster-Regular, Lobster"><tspan x="0" y="0">Gourmets</tspan></text>
                    <text id="_20e_marché_des" data-name="20e marché des" transform="translate(135.839 470.198)" fill="#cb0a0a" font-size="21" font-family="Lobster-Regular, Lobster"><tspan x="0" y="0">20e marché des</tspan></text>
                    <text id="Produits_des_terroirs_européens" data-name="Produits des terroirs européens" transform="translate(122.839 524.198)" fill="#a4141d" font-size="16" font-family="Lobster-Regular, Lobster"><tspan x="0" y="0">Produits des terroirs européens</tspan></text>
                </g>
            </svg>
        </a>
    </h1>

    <button class="header__burger" id="burgerBtn">
        <span>
            <img src="{{ asset('/parts/img/menu_bar.svg') }}" alt>
        </span>
        <span>
            <img src="{{ asset('/parts/img/menu_bar.svg') }}" alt>
        </span>
        <span>
            <img src="{{ asset('/parts/img/menu_bar.svg') }}" alt>
        </span>
    </button>

    <!-- nav -->
    <x-nav class="header__nav nav"></x-nav>
</header>
