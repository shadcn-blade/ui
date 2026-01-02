@props([
    'ratio' => '16/9',
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'relative overflow-hidden',
    $attributes->get('class')
);

// Convert ratio string to CSS value (e.g., "16/9" -> "16 / 9")
$cssRatio = str_replace('/', ' / ', $ratio);
@endphp

<div
    data-slot="aspect-ratio"
    style="aspect-ratio: {{ $cssRatio }};"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>
