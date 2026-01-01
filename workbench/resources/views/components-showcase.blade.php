<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shadcn-blade Components</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="min-h-screen p-8">
    <div class="max-w-6xl mx-auto space-y-16">
        {{-- Header --}}
        <div class="space-y-2">
            <h1 class="text-4xl font-bold">shadcn-blade/ui</h1>
            <p class="text-muted-foreground">Beautifully designed components built with Laravel Blade and Tailwind CSS.</p>
        </div>

        {{-- Theme Toggle --}}
        <div class="flex items-center gap-4">
            <button
                onclick="document.documentElement.classList.toggle('dark')"
                class="px-4 py-2 rounded-md border bg-background hover:bg-accent"
            >
                Toggle Dark Mode
            </button>
        </div>

        {{-- Button Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Button</h2>
                <p class="text-sm text-muted-foreground">Displays a button or a component that looks like a button.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Default</p>
                <x-ui.button>Button</x-ui.button>
            </div>

            {{-- Secondary --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Secondary</p>
                <x-ui.button variant="secondary">Secondary</x-ui.button>
            </div>

            {{-- Destructive --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Destructive</p>
                <x-ui.button variant="destructive">Destructive</x-ui.button>
            </div>

            {{-- Outline --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Outline</p>
                <x-ui.button variant="outline">Outline</x-ui.button>
            </div>

            {{-- Ghost --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Ghost</p>
                <x-ui.button variant="ghost">Ghost</x-ui.button>
            </div>

            {{-- Link --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Link</p>
                <x-ui.button variant="link">Link</x-ui.button>
            </div>
        </section>

        {{-- Input Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Input</h2>
                <p class="text-sm text-muted-foreground">Displays a form input field or a component that looks like an input field.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">Default</p>
                <x-ui.input type="email" placeholder="Email" />
            </div>

            {{-- File --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">File</p>
                <x-ui.input type="file" />
            </div>

            {{-- Disabled --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">Disabled</p>
                <x-ui.input disabled type="email" placeholder="Email" />
            </div>

            {{-- With Label --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">With Label</p>
                <div class="grid w-full max-w-sm items-center gap-1.5">
                    <x-ui.label for="email">Email</x-ui.label>
                    <x-ui.input type="email" id="email" placeholder="Email" />
                </div>
            </div>

            {{-- With Button --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">With Button</p>
                <div class="flex w-full max-w-sm items-center space-x-2">
                    <x-ui.input type="email" placeholder="Email" />
                    <x-ui.button type="submit">Subscribe</x-ui.button>
                </div>
            </div>
        </section>

        {{-- Label Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Label</h2>
                <p class="text-sm text-muted-foreground">Renders an accessible label associated with controls.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">Default</p>
                <div>
                    <x-ui.label for="terms">Accept terms and conditions</x-ui.label>
                </div>
            </div>
        </section>

        {{-- Badge Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Badge</h2>
                <p class="text-sm text-muted-foreground">Displays a badge or a component that looks like a badge.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Default</p>
                <x-ui.badge>Badge</x-ui.badge>
            </div>

            {{-- Secondary --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Secondary</p>
                <x-ui.badge variant="secondary">Secondary</x-ui.badge>
            </div>

            {{-- Outline --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Outline</p>
                <x-ui.badge variant="outline">Outline</x-ui.badge>
            </div>

            {{-- Destructive --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Destructive</p>
                <x-ui.badge variant="destructive">Destructive</x-ui.badge>
            </div>
        </section>

        {{-- Textarea Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Textarea</h2>
                <p class="text-sm text-muted-foreground">Renders an accessible textarea associated with controls.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">Default</p>
                <x-ui.textarea placeholder="Type your message here." />
            </div>

            {{-- Disabled --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">Disabled</p>
                <x-ui.textarea disabled placeholder="Disabled textarea" />
            </div>

            {{-- With Label --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">With Label</p>
                <div class="grid w-full max-w-sm items-center gap-1.5">
                    <x-ui.label for="message">Message</x-ui.label>
                    <x-ui.textarea id="message" placeholder="Type your message here." />
                </div>
            </div>

            {{-- With Button --}}
            <div class="space-y-2 max-w-sm">
                <p class="text-sm font-semibold">With Button</p>
                <div class="flex w-full max-w-sm items-end gap-2">
                    <x-ui.textarea placeholder="Type your message here." />
                    <x-ui.button type="submit">Send</x-ui.button>
                </div>
            </div>
        </section>

        {{-- Checkbox Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Checkbox</h2>
                <p class="text-sm text-muted-foreground">Displays a checkbox that can be checked or unchecked.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Default</p>
                <div class="flex items-center gap-3">
                    <x-ui.checkbox id="terms" />
                    <x-ui.label for="terms">Accept terms and conditions</x-ui.label>
                </div>
            </div>

            {{-- Checked --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Checked</p>
                <div class="flex items-center gap-3">
                    <x-ui.checkbox id="terms-2" :checked="true" />
                    <x-ui.label for="terms-2">Accept terms and conditions</x-ui.label>
                </div>
            </div>

            {{-- Disabled --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Disabled</p>
                <div class="flex items-center gap-3">
                    <x-ui.checkbox id="toggle" :disabled="true" />
                    <x-ui.label for="toggle">Enable notifications</x-ui.label>
                </div>
            </div>
        </section>

        {{-- Radio Group Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Radio Group</h2>
                <p class="text-sm text-muted-foreground">A set of checkable buttons where only one can be checked at a time.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Default</p>
                <x-ui.radio-group>
                    <div class="flex items-center gap-3">
                        <x-ui.radio-group-item id="r1" value="default" />
                        <x-ui.label for="r1">Default</x-ui.label>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-ui.radio-group-item id="r2" value="comfortable" :checked="true" />
                        <x-ui.label for="r2">Comfortable</x-ui.label>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-ui.radio-group-item id="r3" value="compact" />
                        <x-ui.label for="r3">Compact</x-ui.label>
                    </div>
                </x-ui.radio-group>
            </div>
        </section>

        {{-- Switch Component --}}
        <section class="space-y-6">
            <div>
                <h2 class="text-2xl font-bold">Switch</h2>
                <p class="text-sm text-muted-foreground">A toggle switch that can be checked or unchecked.</p>
            </div>

            {{-- Default --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Default</p>
                <div class="flex items-center gap-2">
                    <x-ui.switch id="airplane-mode" />
                    <x-ui.label for="airplane-mode">Airplane Mode</x-ui.label>
                </div>
            </div>

            {{-- Checked --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Checked</p>
                <div class="flex items-center gap-2">
                    <x-ui.switch id="notifications" :checked="true" />
                    <x-ui.label for="notifications">Enable Notifications</x-ui.label>
                </div>
            </div>

            {{-- Disabled --}}
            <div class="space-y-2">
                <p class="text-sm font-semibold">Disabled</p>
                <div class="flex items-center gap-2">
                    <x-ui.switch id="bluetooth" :disabled="true" />
                    <x-ui.label for="bluetooth">Bluetooth</x-ui.label>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
