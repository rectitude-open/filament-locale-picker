<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentLocalePicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RectitudeOpen\FilamentLocalePicker\FilamentLocalePicker
 */
class FilamentLocalePicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RectitudeOpen\FilamentLocalePicker\FilamentLocalePicker::class;
    }
}
