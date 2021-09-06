@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'active'
                : '';
@endphp

<li {{ $attributes->merge(['class' => 'nav__list ' . $classes]) }}>
    <a href="{{ $href }}">{{ $slot }}</a>
</li>
