@props([])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'relative flex size-8 shrink-0 overflow-hidden rounded-full',
    $attributes->get('class')
);
@endphp

<div
    data-slot="avatar"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>
