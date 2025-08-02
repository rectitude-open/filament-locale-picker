<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentLocalePicker;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentLocalePickerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-locale-picker';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
