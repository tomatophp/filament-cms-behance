<?php

namespace TomatoPHP\FilamentCmsBehance;

use Illuminate\Support\ServiceProvider;


class FilamentCmsBehanceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-cms-behance.php', 'filament-cms-behance');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-cms-behance.php' => config_path('filament-cms-behance.php'),
        ], 'filament-cms-behance-config');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-cms-behance');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-cms-behance'),
        ], 'filament-cms-behance-lang');
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
