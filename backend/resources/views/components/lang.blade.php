<!-- Notifications menu -->
<li
    class="relative px-2 py-1 rounded-md bg-gray-100 hover:text-gray-800 dark:bg-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
    <button
        class="flex justify-center align-middle font-semibold rounded-md focus:outline-none focus:shadow-outline-green"
        @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications"
        aria-haspopup="true">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
        </svg>
        @foreach (config('app.available_locales') as $locale)
            @if (app()->getLocale() == $locale)
                {{ strtoupper($locale) }}
            @endif
        @endforeach
    </button>

    <template x-if="isNotificationsMenuOpen">
        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu"
            @keydown.escape="closeNotificationsMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700">

            @foreach (config('app.available_locales') as $locale)
                <x-lang-link :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), [
                    'locale' => $locale,
                ])" :active="app()->getLocale() == $locale">

                    @switch(strtolower($locale))
                        @case('uz')
                            O'zbekcha
                        @break

                        @case('oz')
                            Ўзбекча
                        @break

                        @case('qr')
                            Qaraqalpaqsha
                        @break

                        @case('kr')
                            Қарақалпақша
                        @break

                        @default
                    @endswitch
                </x-lang-link>
            @endforeach
        </ul>
    </template>
</li>
