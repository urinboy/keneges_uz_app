<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="flex items-center justify-start ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="/">
        <img class="object-cover w-8 h-8 rounded-full mr-2" src="{{ asset('/favicon.png') }}"
            alt="{{ config('app.name', 'Laravel') }}" aria-hidden="true" />
        {{ config('app.name', 'Laravel') }}
    </a>
    <ul class="mt-6">
        <x-sidebar-link :href="route('home')" :active="request()->routeIs('home')">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                </path>
            </svg>
            <span class="ml-4">{{ __('pages.home') }}</span>
        </x-sidebar-link>
    </ul>
    <ul>
        <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            <span class="ml-4">{{ __('pages.dashboard') }}</span>
        </x-sidebar-link>
        <x-sidebar-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
            <svg class="w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                </path>
            </svg>
            <span class="ml-4">{{ __('pages.profile') }}</span>
        </x-sidebar-link>
        <x-sidebar-link href="#">
            <svg class="h-4 w-4 font-semibold" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <span class="ml-4">{{ __('pages.settings') }}</span>
        </x-sidebar-link>


        {{-- <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            <span class="ml-4">{{ __('Admin panel') }}</span>
        </x-sidebar-link>
        
        <x-sidebar-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                <path
                    d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
            </svg>
            <span class="ml-4">{{ __('Categories') }}</span>
        </x-sidebar-link>
        
        <x-sidebar-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
            </svg>
            <span class="ml-4">{{ __('Posts') }}</span>
        </x-sidebar-link>

        @can('access-setting')
            <x-sidebar-link :href="route('settings.index')" :active="request()->routeIs('settings.index')">
                <svg class="h-4 w-4 font-semibold" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
                <span class="ml-4">{{ __('Settings') }}</span>
            </x-sidebar-link>
        @endcan --}}

    </ul>

    <div class="px-6 my-6 flex items-center justify-center">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}"
                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white  focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                onclick="event.preventDefault();
            this.closest('form').submit();">
                <span class="ml-2" aria-hidden="true">
                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                        </path>
                    </svg>
                </span>
                {{ __('auth.logout') }}
            </a>
            {{-- <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                    </path>
                </svg>
                <span>{{ __('Log Out') }}</span>
            </a> --}}
        </form>

    </div>


    {{-- <div class="px-6 my-6 flex items-center justify-center">
        <a href="{{ url('/') }}" target="_blank"
            class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-white  focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            {{ __('View website') }}
            <span class="ml-2" aria-hidden="true">
                <svg class="w-5 h-5 fill-gray-100 hover:fill-gray-200" version="1.1" id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84px"
                    height="84px" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="XMLID_1666_"
                            d="M46,0C20.6,0,0,20.6,0,46s20.6,46,46,46s46-20.6,46-46S71.4,0,46,0z M49.7,83.8c-0.2,0-0.4,0-0.7,0.1V62.2 c5.2-0.1,9.9-0.2,14.2-0.5C59.4,73.4,52.3,81.2,49.7,83.8z M42.3,83.8c-2.7-2.7-9.7-10.5-13.5-22.1c4.2,0.3,9,0.5,14.2,0.5v21.7 C42.8,83.9,42.6,83.8,42.3,83.8z M8,46c0-2.5,0.3-5,0.7-7.4c2.2-0.4,6.4-1,12.3-1.6c-0.5,2.9-0.8,5.9-0.8,9.1c0,3.2,0.3,6.2,0.7,9 c-5.8-0.6-10.1-1.2-12.3-1.6C8.3,51,8,48.5,8,46z M26.3,46c0-3.4,0.4-6.6,1-9.6c4.6-0.3,9.8-0.6,15.7-0.6v20.4 c-5.8-0.1-11.1-0.3-15.8-0.7C26.7,52.6,26.3,49.4,26.3,46z M49.6,8.2c2.7,2.7,9.6,10.7,13.5,22.1c-4.2-0.3-8.9-0.5-14.1-0.5V8.1 C49.2,8.1,49.4,8.2,49.6,8.2z M43,8.1v21.7c-5.2,0.1-9.9,0.2-14.1,0.5c3.8-11.4,10.8-19.4,13.4-22.1C42.6,8.2,42.8,8.1,43,8.1z M49,56.2V35.8c5.8,0.1,11.1,0.3,15.7,0.6c0.6,3,1,6.2,1,9.6c0,3.4-0.3,6.6-0.9,9.6C60.2,55.9,54.9,56.1,49,56.2z M70.9,37 c5.9,0.6,10.1,1.2,12.3,1.6C83.7,41,84,43.5,84,46c0,2.5-0.3,5-0.7,7.4c-2.2,0.4-6.4,1-12.3,1.6c0.5-2.9,0.7-5.9,0.7-9.1 C71.7,42.9,71.4,39.8,70.9,37z M81.4,32.2c-2.8-0.4-6.8-0.9-11.9-1.4c-2.4-8.6-6.6-15.5-10.1-20.4C69.5,14.2,77.5,22.2,81.4,32.2z M32.6,10.4c-3.6,4.8-7.7,11.7-10.1,20.3c-5,0.4-9,1-11.9,1.4C14.5,22.2,22.6,14.2,32.6,10.4z M10.6,59.8c2.8,0.4,6.8,0.9,11.8,1.4 c2.4,8.6,6.4,15.5,10,20.3C22.4,77.6,14.5,69.7,10.6,59.8z M59.6,81.5c3.6-4.8,7.6-11.6,10-20.2c5-0.4,9-1,11.8-1.4 C77.5,69.7,69.6,77.6,59.6,81.5z">
                        </path>
                    </g>
                </svg>
             </span>
        </a>
    </div> --}}

    <x-www-uz />
</div>
