@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'flex size-9 items-center justify-center',
    $attributes->get('class')
);
@endphp

<span
    data-slot="breadcrumb-ellipsis"
    role="presentation"
    aria-hidden="true"
    {{ $attributes->merge(['class' => $classes]) }}
>
    @if($slot->isEmpty())
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>
        <span class="sr-only">More</span>
    @else
        {{ $slot }}
    @endif
</span>
