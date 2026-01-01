<?php

namespace ShadcnBlade\UI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitCommand extends Command
{
    public $signature = 'shadcn:init
        {--force : Override existing configuration}';

    public $description = 'Initialize shadcn-blade in your project';

    public function handle(): int
    {
        $this->info('Initializing shadcn-blade/ui...');

        // Check if already initialized
        $componentsJsonPath = base_path('components.json');
        if (File::exists($componentsJsonPath) && ! $this->option('force')) {
            $this->error('Project already initialized. Use --force to reinitialize.');

            return self::FAILURE;
        }

        // Create components.json
        $this->createComponentsJson();

        // Create component directory
        $this->createComponentDirectory();

        // Update CSS with theme variables
        $this->updateAppCss();

        // Show success message and next steps
        $this->displaySuccess();

        return self::SUCCESS;
    }

    protected function createComponentsJson(): void
    {
        $this->info('Creating components.json...');

        $stub = File::get(__DIR__.'/../../resources/stubs/components.json.stub');

        File::put(base_path('components.json'), $stub);

        $this->line('✓ Created components.json');
    }

    protected function createComponentDirectory(): void
    {
        $this->info('Creating component directory...');

        $componentPath = resource_path('views/components/ui');

        if (! File::isDirectory($componentPath)) {
            File::makeDirectory($componentPath, 0755, true);
            $this->line('✓ Created '.$componentPath);
        } else {
            $this->line('✓ Directory already exists: '.$componentPath);
        }
    }

    protected function updateAppCss(): void
    {
        $this->info('Setting up app.css with Tailwind v4 theme...');

        $appCssPath = resource_path('css/app.css');

        // Get the complete app.css stub (Tailwind v4 with @import)
        $appCssStub = File::get(__DIR__.'/../../resources/stubs/app.css.stub');

        if (! File::exists($appCssPath)) {
            // Create new app.css from stub
            $cssDir = resource_path('css');
            if (! File::isDirectory($cssDir)) {
                File::makeDirectory($cssDir, 0755, true);
            }
            File::put($appCssPath, $appCssStub);
            $this->line('✓ Created app.css with shadcn-blade theme (Tailwind v4)');

            return;
        }

        $currentContent = File::get($appCssPath);

        // Check if shadcn theme is already configured
        if (str_contains($currentContent, '@theme inline') || str_contains($currentContent, '--color-primary')) {
            $this->line('✓ Theme variables already present in app.css');

            return;
        }

        // Check if using Tailwind v4 (@import "tailwindcss")
        if (str_contains($currentContent, '@import "tailwindcss"')) {
            $this->warn('Tailwind v4 detected but shadcn theme not configured.');
            $this->line('Please manually merge the theme variables, or backup your app.css and re-run with --force');

            return;
        }

        // Offer to replace with Tailwind v4 setup
        if ($this->confirm('Replace app.css with Tailwind v4 + shadcn-blade theme?', true)) {
            File::put($appCssPath, $appCssStub);
            $this->line('✓ Replaced app.css with Tailwind v4 theme');
        } else {
            $this->warn('Skipped CSS update. Please manually add theme variables.');
        }
    }

    protected function displaySuccess(): void
    {
        $this->newLine();
        $this->info('Success! shadcn-blade/ui has been initialized.');
        $this->newLine();

        $this->comment('Next steps:');
        $this->line('1. Add components:');
        $this->line('   php artisan shadcn:add button');
        $this->newLine();
        $this->line('2. Start using components:');
        $this->line('   <x-ui.button>Click me</x-ui.button>');
        $this->newLine();
    }
}
