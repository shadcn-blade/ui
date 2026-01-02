@props([
    'href' => '#',
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'hover:text-foreground transition-colors',
    $attributes->get('class')
);
@endphp

<a
    data-slot="breadcrumb-link"
    href="{{ $href }}"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</a>
