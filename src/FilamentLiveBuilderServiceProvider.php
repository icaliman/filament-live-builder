<?php

namespace XliteDev\FilamentLiveBuilder;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentLiveBuilderServiceProvider extends PluginServiceProvider
{
    public static string $name = 'live-builder';

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
        'plugin-live-builder' => __DIR__.'/../resources/dist/live-builder.css',
    ];

    protected array $scripts = [
        'plugin-live-builder' => __DIR__.'/../resources/dist/live-builder.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-live-builder' => __DIR__ . '/../resources/dist/live-builder.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
