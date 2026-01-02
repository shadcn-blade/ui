@props([])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'col-start-2 line-clamp-1 min-h-4 font-medium tracking-tight',
    $attributes->get('class')
);
@endphp

<div
    data-slot="alert-title"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>
