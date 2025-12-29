<?php

// config for ShadcnBlade/UI
return [

    /*
    |--------------------------------------------------------------------------
    | Component Path
    |--------------------------------------------------------------------------
    |
    | The path where components will be copied when using the CLI.
    | This should be relative to the user's project root.
    |
    */
    'component_path' => 'resources/views/components/ui',

    /*
    |--------------------------------------------------------------------------
    | CSS Path
    |--------------------------------------------------------------------------
    |
    | The path to the CSS file where theme variables will be added.
    |
    */
    'css_path' => 'resources/css/app.css',

    /*
    |--------------------------------------------------------------------------
    | Registry Path
    |--------------------------------------------------------------------------
    |
    | The path to the local component registry.
    |
    */
    'registry_path' => __DIR__.'/../registry',

    /*
    |--------------------------------------------------------------------------
    | Registry URL
    |--------------------------------------------------------------------------
    |
    | The URL to the remote component registry (future feature).
    |
    */
    'registry_url' => 'https://registry.shadcn-blade.com',

];
