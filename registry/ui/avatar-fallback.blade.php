@props([])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'bg-muted flex size-full items-center justify-center rounded-full',
    $attributes->get('class')
);
@endphp

<div
    data-slot="avatar-fallback"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>
