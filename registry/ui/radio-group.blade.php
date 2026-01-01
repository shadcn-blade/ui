@props([
    'name' => null,
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'grid gap-3',
    $attributes->get('class')
);
@endphp

<div {{ $attributes->merge(['class' => $classes, 'data-name' => $name]) }}>
    {{ $slot }}
</div>
