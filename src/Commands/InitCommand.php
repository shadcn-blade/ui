<?php

namespace ShadcnBlade\UI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use ShadcnBlade\UI\Services\ColorSchemeService;

class InitCommand extends Command
{
    public $signature = 'shadcn:init
        {--force : Override existing configuration}
        {--base-color= : Base color scheme (neutral, zinc, slate, stone, gray)}';

    public $description = 'Initialize shadcn-blade in your project';

    protected string $baseColor;

    public function handle(): int
    {
        $this->info('Initializing shadcn-blade/ui...');

        // Check if already initialized
        $componentsJsonPath = base_path('components.json');
        if (File::exists($componentsJsonPath) && ! $this->option('force')) {
            $this->error('Project already initialized. Use --force to reinitialize.');

            return self::FAILURE;
        }

        // Get base color selection
        $this->baseColor = $this->selectBaseColor();

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

    protected function selectBaseColor(): string
    {
        // If base-color option provided, validate it
        if ($baseColor = $this->option('base-color')) {
            $schemes = ColorSchemeService::getAvailableSchemes();
            if (! in_array($baseColor, $schemes)) {
                $this->error("Invalid base color: {$baseColor}");
                $this->line('Available options: '.implode(', ', $schemes));
                exit(self::FAILURE);
            }

            return $baseColor;
        }

        // Interactive selection
        $schemes = ColorSchemeService::getAvailableSchemes();
        $choice = $this->choice(
            'Which base color would you like to use?',
            $schemes,
            0 // default to 'neutral'
        );

        return $choice;
    }

    protected function createComponentsJson(): void
    {
        $this->info('Creating components.json...');

        $stub = File::get(__DIR__.'/../../resources/stubs/components.json.stub');

        // Replace baseColor placeholder
        $stub = str_replace('{{BASE_COLOR}}', $this->baseColor, $stub);

        File::put(base_path('components.json'), $stub);

        $this->line("✓ Created components.json (base color: {$this->baseColor})");
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
        $this->info('Setting up theme...');

        // Update the stub file (source of truth)
        $stubPath = __DIR__.'/../../resources/stubs/app.css.stub';
        $appCssContent = $this->generateAppCss();
        File::put($stubPath, $appCssContent);

        $this->line("✓ Updated app.css.stub with {$this->baseColor} theme");
        $this->line("  Run 'composer sync' to apply to workbench");

        // Also update user's app.css if exists
        $appCssPath = resource_path('css/app.css');
        if (File::exists($appCssPath)) {
            if ($this->option('force') || $this->confirm("Update app.css with {$this->baseColor} theme?", true)) {
                File::put($appCssPath, $appCssContent);
                $this->line("✓ Updated app.css");
            }
        } else {
            // Create new app.css
            $cssDir = resource_path('css');
            if (! File::isDirectory($cssDir)) {
                File::makeDirectory($cssDir, 0755, true);
            }
            File::put($appCssPath, $appCssContent);
            $this->line("✓ Created app.css");
        }
    }

    protected function generateAppCss(): string
    {
        $themeVariables = ColorSchemeService::getSchemeVariables($this->baseColor);

        return <<<CSS
@import "tailwindcss";

@custom-variant dark (&:is(.dark *));

@theme inline {
  --radius-sm: calc(var(--radius) - 4px);
  --radius-md: calc(var(--radius) - 2px);
  --radius-lg: var(--radius);
  --radius-xl: calc(var(--radius) + 4px);
  --color-background: var(--background);
  --color-foreground: var(--foreground);
  --color-card: var(--card);
  --color-card-foreground: var(--card-foreground);
  --color-popover: var(--popover);
  --color-popover-foreground: var(--popover-foreground);
  --color-primary: var(--primary);
  --color-primary-foreground: var(--primary-foreground);
  --color-secondary: var(--secondary);
  --color-secondary-foreground: var(--secondary-foreground);
  --color-muted: var(--muted);
  --color-muted-foreground: var(--muted-foreground);
  --color-accent: var(--accent);
  --color-accent-foreground: var(--accent-foreground);
  --color-destructive: var(--destructive);
  --color-destructive-foreground: var(--destructive-foreground);
  --color-border: var(--border);
  --color-input: var(--input);
  --color-ring: var(--ring);
  --color-chart-1: var(--chart-1);
  --color-chart-2: var(--chart-2);
  --color-chart-3: var(--chart-3);
  --color-chart-4: var(--chart-4);
  --color-chart-5: var(--chart-5);
}

{$themeVariables}

@layer base {
  * {
    @apply border-border outline-ring/50;
  }
  body {
    @apply bg-background text-foreground;
  }
}

CSS;
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
