@props([
    'checked' => false,
    'disabled' => false,
    'id' => null,
])

@php
use ShadcnBlade\UI\Utils\ClassComposer;

$classes = ClassComposer::cn(
    'peer data-[state=checked]:bg-primary data-[state=unchecked]:bg-input focus-visible:border-ring focus-visible:ring-ring/50 dark:data-[state=unchecked]:bg-input/80 inline-flex h-[1.15rem] w-8 shrink-0 items-center rounded-full border border-transparent shadow-xs transition-all outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50',
    $attributes->get('class')
);

$thumbClasses = 'bg-background dark:data-[state=unchecked]:bg-foreground dark:data-[state=checked]:bg-primary-foreground pointer-events-none block size-4 rounded-full ring-0 transition-transform data-[state=checked]:translate-x-[calc(100%-2px)] data-[state=unchecked]:translate-x-0';
@endphp

<button
    type="button"
    role="switch"
    {{ $attributes->merge([
        'class' => $classes,
        'id' => $id,
        'disabled' => $disabled,
        'aria-checked' => $checked ? 'true' : 'false',
        'data-state' => $checked ? 'checked' : 'unchecked',
        'x-data' => "{ checked: " . ($checked ? 'true' : 'false') . " }",
        '@click' => 'checked = !checked',
        ':aria-checked' => 'checked ? "true" : "false"',
        ':data-state' => 'checked ? "checked" : "unchecked"',
    ]) }}
    data-slot="switch"
>
    <span
        class="{{ $thumbClasses }}"
        :data-state="checked ? 'checked' : 'unchecked'"
        data-slot="switch-thumb"
        x-cloak
    ></span>
</button>
