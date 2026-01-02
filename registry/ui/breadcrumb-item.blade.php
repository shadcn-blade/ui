@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'inline-flex items-center gap-1.5',
    $attributes->get('class')
);
@endphp

<li
    data-slot="breadcrumb-item"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</li>
