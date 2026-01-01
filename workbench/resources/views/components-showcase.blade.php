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
    </div>
</body>
</html>
