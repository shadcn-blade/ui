<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shadcn-blade Components</title>
    @vite(['workbench/resources/css/app.css'])
</head>
<body class="min-h-screen p-8">
    <div class="max-w-6xl mx-auto space-y-12">
        {{-- Header --}}
        <div class="space-y-2">
            <h1 class="text-4xl font-bold">shadcn-blade/ui</h1>
            <p class="text-muted-foreground">Component showcase and testing environment</p>
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
        <section class="space-y-4">
            <div>
                <h2 class="text-2xl font-bold">Button</h2>
                <p class="text-sm text-muted-foreground">Displays a button or a component that looks like a button.</p>
            </div>

            <div class="space-y-6">
                {{-- Variants --}}
                <div class="space-y-3">
                    <h3 class="text-lg font-semibold">Variants</h3>
                    <div class="flex flex-wrap gap-3">
                        <x-ui.button>Default</x-ui.button>
                        <x-ui.button variant="secondary">Secondary</x-ui.button>
                        <x-ui.button variant="outline">Outline</x-ui.button>
                        <x-ui.button variant="ghost">Ghost</x-ui.button>
                        <x-ui.button variant="destructive">Destructive</x-ui.button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
