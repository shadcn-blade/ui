@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    '[&>svg]:size-3.5',
    $attributes->get('class')
);
@endphp

<li
    data-slot="breadcrumb-separator"
    role="presentation"
    aria-hidden="true"
    {{ $attributes->merge(['class' => $classes]) }}
>
    @if($slot->isEmpty())
        <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    @else
        {{ $slot }}
    @endif
</li>
