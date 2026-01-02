@props([])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'text-muted-foreground col-start-2 grid justify-items-start gap-1 text-sm [&_p]:leading-relaxed',
    $attributes->get('class')
);
@endphp

<div
    data-slot="alert-description"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>
