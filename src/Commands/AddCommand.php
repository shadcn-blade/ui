<?php

namespace ShadcnBlade\UI\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use ShadcnBlade\UI\Services\ComponentInstaller;
use ShadcnBlade\UI\Services\DependencyResolver;
use ShadcnBlade\UI\Services\RegistryService;

class AddCommand extends Command
{
    public $signature = 'shadcn:add
        {components* : Component names to add}
        {--all : Add all components}
        {--overwrite : Overwrite existing components}';

    public $description = 'Add components to your project';

    protected RegistryService $registry;

    protected DependencyResolver $resolver;

    public function handle(): int
    {
        // Initialize services
        $this->registry = new RegistryService;
        $this->resolver = new DependencyResolver($this->registry);

        // Check if project is initialized
        if (! $this->isInitialized()) {
            $this->error('Project not initialized. Run: php artisan shadcn:init');

            return self::FAILURE;
        }

        // Get component names
        $components = $this->getComponentsToInstall();

        if (empty($components)) {
            $this->error('No components specified.');

            return self::FAILURE;
        }

        // Install each component
        $this->info('Installing components...');

        foreach ($components as $componentName) {
            $this->installComponent($componentName);
        }

        $this->newLine();
        $this->info('✨ Components installed successfully!');

        return self::SUCCESS;
    }

    protected function isInitialized(): bool
    {
        return File::exists(base_path('components.json'));
    }

    protected function getComponentsToInstall(): array
    {
        if ($this->option('all')) {
            return $this->registry->getAllComponents();
        }

        return $this->argument('components');
    }

    protected function installComponent(string $componentName): void
    {
        $this->line("→ {$componentName}");

        // Get component from registry
        $component = $this->registry->getComponent($componentName);

        if (! $component) {
            $this->error("  ✗ Component not found in registry: {$componentName}");

            return;
        }

        // Resolve dependencies
        $tree = $this->resolver->resolveTree($componentName);

        // Get target path from components.json
        $config = $this->getConfig();
        $targetPath = base_path($config['aliases']['ui'] ?? 'resources/views/components/ui');

        // Install all components in dependency order
        $installer = new ComponentInstaller($targetPath, $this->option('overwrite'));

        foreach ($tree as $comp) {
            try {
                $files = $installer->install($comp);

                foreach ($files as $file) {
                    $relativePath = str_replace(base_path().'/', '', $file);
                    $this->line("  ✓ {$relativePath}");
                }
            } catch (\Exception $e) {
                $this->error("  ✗ {$e->getMessage()}");
            }
        }
    }

    protected function getConfig(): array
    {
        $path = base_path('components.json');

        if (! File::exists($path)) {
            return [];
        }

        $content = File::get($path);

        return json_decode($content, true) ?? [];
    }
}
