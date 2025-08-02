<div x-data="{ open: false }" class="relative">
    <button @click="open = !open"
        class="flex items-center justify-center rounded-lg bg-white px-3 py-2 text-sm ring-1 ring-gray-950/10 hover:bg-gray-50 dark:bg-gray-900 dark:ring-white/20 dark:hover:bg-gray-800">
        <x-icon :name="'flag-country-' . $currentLocaleConfig['flag_code']" width="28" />
    </button>

    <div x-show="open" @click.away="open = false" style="display: none;"
        class="absolute end-0 z-10 mt-2 w-32 divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:divide-gray-700 dark:bg-gray-800">
        <div class="py-1">
            @foreach ($locales as $locale => $localConfig)
                <button wire:click="switchLocale('{{ $locale }}')"
                    class="flex w-full items-center gap-x-2 px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none dark:text-gray-300 dark:hover:bg-gray-900 dark:focus:bg-gray-900">
                    <x-icon :name="'flag-country-' . $localConfig['flag_code']" width="28" />
                    <span>{{ $localConfig['name'] ?? '' }}</span>
                </button>
            @endforeach
        </div>
    </div>
</div>
