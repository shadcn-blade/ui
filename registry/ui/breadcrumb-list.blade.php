@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'text-muted-foreground flex flex-wrap items-center gap-1.5 text-sm break-words sm:gap-2.5',
    $attributes->get('class')
);
@endphp

<ol
    data-slot="breadcrumb-list"
    style="display: flex;"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</ol>
