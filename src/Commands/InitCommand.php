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

    protected function displaySuccess(): void
    {
        $this->newLine();
        $this->info('✨ Success! shadcn-blade/ui initialized.');
        $this->newLine();

        $this->comment('Next steps:');
        $this->line('1. Install Tailwind CSS and Alpine.js:');
        $this->line('   npm install -D tailwindcss alpinejs');
        $this->newLine();
        $this->line('2. Add components:');
        $this->line('   php artisan shadcn:add button card');
        $this->newLine();
        $this->line('3. Start using components:');
        $this->line('   <x-ui.button>Click me</x-ui.button>');
        $this->newLine();
    }
}
