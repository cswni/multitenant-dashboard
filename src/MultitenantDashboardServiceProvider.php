<?php

namespace Cswni\MultitenantDashboard;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class MultitenantDashboardServiceProvider extends PluginServiceProvider
{
    public static string $name = 'multitenant-dashboard';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-multitenant-dashboard' => __DIR__.'/../resources/dist/multitenant-dashboard.css',
    ];

    protected array $scripts = [
        'plugin-multitenant-dashboard' => __DIR__.'/../resources/dist/multitenant-dashboard.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-multitenant-dashboard' => __DIR__ . '/../resources/dist/multitenant-dashboard.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
