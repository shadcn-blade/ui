@props([
    'value' => '',
    'id' => null,
    'name' => null,
    'checked' => false,
    'disabled' => false,
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'border-input text-primary focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 aspect-square size-4 shrink-0 rounded-full border shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50',
    $attributes->get('class')
);
@endphp

<div class="relative inline-flex items-center">
    <input
        type="radio"
        {{ $attributes->merge([
            'class' => $classes,
            'id' => $id,
            'name' => $name,
            'value' => $value,
            'disabled' => $disabled,
        ]) }}
        {{ $checked ? 'checked' : '' }}
        data-slot="radio-group-item"
    />
    <div
        class="pointer-events-none absolute inset-0 flex items-center justify-center opacity-0 peer-checked:opacity-100"
        data-slot="radio-group-indicator"
    >
        <svg
            class="fill-primary size-2"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
        >
            <circle cx="12" cy="12" r="12"></circle>
        </svg>
    </div>
</div>
