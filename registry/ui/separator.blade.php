@props([
    'orientation' => 'horizontal',
    'decorative' => true,
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'bg-border shrink-0 data-[orientation=horizontal]:h-px data-[orientation=horizontal]:w-full data-[orientation=vertical]:h-full data-[orientation=vertical]:w-px',
    $attributes->get('class')
);
@endphp

<div
    data-slot="separator"
    data-orientation="{{ $orientation }}"
    role="{{ $decorative ? 'none' : 'separator' }}"
    aria-orientation="{{ $orientation }}"
    {{ $attributes->merge(['class' => $classes]) }}
></div>
