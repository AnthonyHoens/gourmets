<nav role="navigation" class="{{ $class }}">
    <h2 role="heading" aria-level="2" class="sr-only nav__title">
        {{ __('Navigation principale') }}
    </h2>
    <ul class="nav__groupList">
        <x-link href="{{ route('home.index') }}" :active="request()->routeIs('home.index')">{{ __('Accueil') }}</x-link>
        <x-link href="{{ route('exhibitor.index') }}" :active="request()->routeIs('exhibitor.index')">{{ __('Exposants') }}</x-link>
        <x-link href="{{ route('ticket.index') }}" :active="request()->routeIs('ticket.index')">{{ __('Billeterie') }}</x-link>
        <x-link href="{{ route('seating.index') }}" :active="request()->routeIs('seating.index')">{{ __('Plan de salon') }}</x-link>
        <x-link href="{{ route('information.index') }}" :active="request()->routeIs('information.index')">{{ __('Informations pratiques') }}</x-link>
        <x-link href="{{ route('about.index') }}" :active="request()->routeIs('about.index')">{{ __('Á propos') }}</x-link>
        <x-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.index')">{{ __('Contact') }}</x-link>
    </ul>
</nav>
