@props([
    'src' => '',
    'alt' => '',
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'aspect-square size-full absolute inset-0 z-10 object-cover',
    $attributes->get('class')
);
@endphp

@if($src)
<img
    data-slot="avatar-image"
    src="{{ $src }}"
    alt="{{ $alt }}"
    {{ $attributes->merge(['class' => $classes]) }}
/>
@endif
