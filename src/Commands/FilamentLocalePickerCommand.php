<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentLocalePicker\Commands;

use Illuminate\Console\Command;

class FilamentLocalePickerCommand extends Command
{
    public $signature = 'filament-locale-picker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
