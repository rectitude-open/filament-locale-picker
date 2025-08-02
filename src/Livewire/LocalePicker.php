<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentLocalePicker\Livewire;

use Livewire\Component;

class LocalePicker extends Component
{
    public array $locales;

    public string $currentLocale;

    public array $currentLocaleConfig;

    public function mount(): void
    {
        $this->locales = config('app.locales') ?? [];
        $this->currentLocale = app()->getLocale();
        $this->currentLocaleConfig = $this->locales[$this->currentLocale] ?? [
            'flag_code' => 'gb',
            'name' => 'English',
        ];
    }

    public function switchLocale(string $locale): void
    {
        if (! isset($this->locales[$locale])) {
            return;
        }

        session()->put('locale', $locale);

        $this->redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('filament-locale-picker::livewire.locale-picker');
    }
}
