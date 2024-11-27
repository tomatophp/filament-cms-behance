<?php

namespace TomatoPHP\FilamentCmsBehance;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentCmsBehancePlugin implements Plugin
{

    public function getId(): string
    {
        return 'filament-cms-behance';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): self
    {
        return new FilamentCmsBehancePlugin;
    }
}
