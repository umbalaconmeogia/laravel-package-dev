<?php

namespace MyVendor\ExamplePackage;

use Illuminate\Support\ServiceProvider;

class ExamplePackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings here
    }

    public function boot()
    {
        // Boot the package
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'example-package');
    }
} 