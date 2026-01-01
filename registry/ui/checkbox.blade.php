@props([
    'checked' => false,
    'disabled' => false,
    'id' => null,
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'peer border-input data-[state=checked]:bg-primary data-[state=checked]:text-primary-foreground data-[state=checked]:border-primary focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive size-4 shrink-0 rounded-[4px] border shadow-xs transition-shadow outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50',
    $attributes->get('class')
);
@endphp

<div class="relative inline-flex items-center">
    <input
        type="checkbox"
        {{ $attributes->merge([
            'class' => $classes,
            'id' => $id,
            'disabled' => $disabled,
            'data-state' => $checked ? 'checked' : 'unchecked',
        ]) }}
        {{ $checked ? 'checked' : '' }}
        data-slot="checkbox"
        x-data="{ checked: {{ $checked ? 'true' : 'false' }} }"
        @change="checked = $el.checked; $el.setAttribute('data-state', checked ? 'checked' : 'unchecked')"
    />
    <div
        class="pointer-events-none absolute inset-0 grid place-content-center text-current transition-none opacity-0 peer-data-[state=checked]:opacity-100"
        data-slot="checkbox-indicator"
    >
        <svg
            class="size-3.5"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="3"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
    </div>
</div>
