@props([])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'animate-pulse rounded-md bg-primary/10',
    $attributes->get('class')
);
@endphp

<div
    data-slot="skeleton"
    {{ $attributes->merge(['class' => $classes]) }}
></div>
