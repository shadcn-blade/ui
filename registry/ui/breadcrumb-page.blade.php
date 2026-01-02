@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'text-foreground font-normal',
    $attributes->get('class')
);
@endphp

<span
    data-slot="breadcrumb-page"
    role="link"
    aria-disabled="true"
    aria-current="page"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</span>
