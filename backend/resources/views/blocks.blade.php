<x-app-layout>
    <x-slot name="header">
        {{ __('pages.blocks') }}
    </x-slot>


    {{-- Alerts --}}
    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
        role="alert">
        <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
    </div>
    <div class="p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300" role="alert">
        <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
    </div>

    {{--  colors --}}

    <ul class="m-5 space-y-2">
        <li>
            <ul class="grid grid-cols-10 h-7">
                <li class="bg-red-900"></li>
                <li class="bg-red-800"></li>
                <li class="bg-red-700"></li>
                <li class="bg-red-600"></li>
                <li class="bg-red-500"></li>
                <li class="bg-red-400"></li>
                <li class="bg-red-300"></li>
                <li class="bg-red-200"></li>
                <li class="bg-red-100"></li>
                <li class="bg-red-50"></li>
            </ul>
            <ul class="grid grid-cols-10 h-7">
                <li class="bg-orange-900"></li>
                <li class="bg-orange-800"></li>
                <li class="bg-orange-700"></li>
                <li class="bg-orange-600"></li>
                <li class="bg-orange-500"></li>
                <li class="bg-orange-300"></li>
                <li class="bg-orange-200"></li>
                <li class="bg-orange-100"></li>
                <li class="bg-orange-50"></li>
            </ul>
            <ul class="grid grid-cols-10 h-7">
                <li class="bg-yellow-900"></li>
                <li class="bg-yellow-800"></li>
                <li class="bg-yellow-700"></li>
                <li class="bg-yellow-600"></li>
                <li class="bg-yellow-500"></li>
                <li class="bg-yellow-300"></li>
                <li class="bg-yellow-200"></li>
                <li class="bg-yellow-100"></li>
                <li class="bg-yellow-50"></li>
            </ul>
            <ul class="grid grid-cols-10 h-7">
                <li class="bg-green-900"></li>
                <li class="bg-green-800"></li>
                <li class="bg-green-700"></li>
                <li class="bg-green-600"></li>
                <li class="bg-green-500"></li>
                <li class="bg-green-300"></li>
                <li class="bg-green-200"></li>
                <li class="bg-green-100"></li>
                <li class="bg-green-50"></li>
            </ul>
            <ul class="grid grid-cols-10 h-7">
                <li class="bg-teal-900"></li>
                <li class="bg-teal-800"></li>
                <li class="bg-teal-700"></li>
                <li class="bg-teal-600"></li>
                <li class="bg-teal-500"></li>
                <li class="bg-teal-300"></li>
                <li class="bg-teal-200"></li>
                <li class="bg-teal-100"></li>
                <li class="bg-teal-50"></li>
            </ul>
        </li>
    </ul>


    {{-- Rasm colums --}}
    <section class="overflow-hidden text-neutral-700">
        <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-24">
            <div class="-m-1 flex flex-wrap md:-m-2">
                <div class="flex w-1/2 flex-wrap">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" />
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" />
                    </div>
                </div>

                <div class="flex w-1/2 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp" />
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block h-full w-full rounded-lg object-cover object-center"
                            src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="flex m-5 space-x-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
            <path fill-rule="evenodd"
                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                clip-rule="evenodd" />
            <path
                d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
            <path
                d="M11.7 2.805a.75.75 0 01.6 0A60.65 60.65 0 0122.83 8.72a.75.75 0 01-.231 1.337 49.949 49.949 0 00-9.902 3.912l-.003.002-.34.18a.75.75 0 01-.707 0A50.009 50.009 0 007.5 12.174v-.224c0-.131.067-.248.172-.311a54.614 54.614 0 014.653-2.52.75.75 0 00-.65-1.352 56.129 56.129 0 00-4.78 2.589 1.858 1.858 0 00-.859 1.228 49.803 49.803 0 00-4.634-1.527.75.75 0 01-.231-1.337A60.653 60.653 0 0111.7 2.805z" />
            <path
                d="M13.06 15.473a48.45 48.45 0 017.666-3.282c.134 1.414.22 2.843.255 4.285a.75.75 0 01-.46.71 47.878 47.878 0 00-8.105 4.342.75.75 0 01-.832 0 47.877 47.877 0 00-8.104-4.342.75.75 0 01-.461-.71c.035-1.442.121-2.87.255-4.286A48.4 48.4 0 016 13.18v1.27a1.5 1.5 0 00-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.661a6.729 6.729 0 00.551-1.608 1.5 1.5 0 00.14-2.67v-.645a48.549 48.549 0 013.44 1.668 2.25 2.25 0 002.12 0z" />
            <path
                d="M4.462 19.462c.42-.419.753-.89 1-1.394.453.213.902.434 1.347.661a6.743 6.743 0 01-1.286 1.794.75.75 0 11-1.06-1.06z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
            <path
                d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
            <path fill-rule="evenodd"
                d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zm6.163 3.75A.75.75 0 0110 12h4a.75.75 0 010 1.5h-4a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
            <path
                d="M9.195 18.44c1.25.713 2.805-.19 2.805-1.629v-2.34l6.945 3.968c1.25.714 2.805-.188 2.805-1.628V8.688c0-1.44-1.555-2.342-2.805-1.628L12 11.03v-2.34c0-1.44-1.555-2.343-2.805-1.629l-7.108 4.062c-1.26.72-1.26 2.536 0 3.256l7.108 4.061z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round"
                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8 w-8">
            <path
                d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-8 w-8">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-2 h-8 w-10">
            <path fill-rule="evenodd"
                d="M2.515 10.674a1.875 1.875 0 000 2.652L8.89 19.7c.352.351.829.549 1.326.549H19.5a3 3 0 003-3V6.75a3 3 0 00-3-3h-9.284c-.497 0-.974.198-1.326.55l-6.375 6.374zM12.53 9.22a.75.75 0 10-1.06 1.06L13.19 12l-1.72 1.72a.75.75 0 101.06 1.06l1.72-1.72 1.72 1.72a.75.75 0 101.06-1.06L15.31 12l1.72-1.72a.75.75 0 10-1.06-1.06l-1.72 1.72-1.72-1.72z"
                clip-rule="evenodd" />
        </svg>
    </div>


    <!-- A few examples from Hero Icons -->
    <div class="flex m-5 space-x-4">
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
            <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
            </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z"></path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z"></path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
            </path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01">
            </path>
        </svg>
    </div>



    <div class="m-5" id="accordion-flush" data-accordion="collapse"
        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
        data-inactive-classes="text-gray-500 dark:text-gray-400">
        <h2 id="accordion-flush-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                aria-controls="accordion-flush-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
                    components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                        href="/docs/getting-started/introduction/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
                    websites even faster with components on top of Tailwind CSS.</p>
            </div>
        </div>
        <h2 id="accordion-flush-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                aria-controls="accordion-flush-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using
                    the Figma software so everything you see in the library has a design equivalent in our Figma file.
                </p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the
                    utility classes from Tailwind CSS and components from Flowbite.</p>
            </div>
        </div>
        <h2 id="accordion-flush-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                aria-controls="accordion-flush-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </h2>
        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
                    Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
                    difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
                    sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
                    Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
                    of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="flex m-5">

        <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="/favicon.png"
            alt="Bordered avatar">

        <div class="relative">
            <img class="w-10 h-10 rounded-full" src="/favicon.png" alt="">
            <span
                class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
        </div>
        <div class="relative">
            <img class="w-10 h-10 rounded" src="/favicon.png" alt="">
            <span
                class="absolute top-0 left-8 transform -translate-y-1/2 w-3.5 h-3.5 bg-red-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
        </div>
        <div class="relative">
            <img class="w-10 h-10 rounded-full" src="/favicon.png" alt="">
            <span
                class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
        </div>
        <div class="relative">
            <img class="w-10 h-10 rounded" src="/favicon.png" alt="">
            <span
                class="absolute bottom-0 left-8 transform translate-y-1/4 w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
        </div>
    </div>


    <div class="flex m-5 -space-x-4">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
    </div>
    <div class="flex m-5 -space-x-4">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/favicon.png"
            alt="">
        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800"
            href="#">+99</a>
    </div>


    <!-- Cards -->
    <div class="grid gap-6 m-5 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ __('Total users') }}
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    5
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    {{ __('All Posts') }}
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    20
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    New sales
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    376
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Pending contacts
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    35
                </p>
            </div>
        </div>
    </div>


    <!-- Container for demo purpose -->
    <div class="container my-2 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-3 text-gray-800">
            <!-- CTA -->
            <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-blue-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-blue"
                href="https://keneges.uz">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <span>Main Projects</span>
                </div>
                <span>View more &RightArrow;</span>
            </a>

            {{-- <h2 class="text-3xl font-bold mb-12 text-center font-semibold text-gray-800 dark:text-gray-200 leading-tight">{{ __('Latest articles') }}</h2> --}}

            <div class="grid lg:grid-cols-3 gap-6">
                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/051.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">I miss the sun</h5>
                                    <p>
                                        <small>Published <u>13.01.2022</u> by Anna Maria Doe</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/044.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">Adventure in the desert</h5>
                                    <p>
                                        <small>Published <u>12.01.2022</u> by Mark Equel</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/045.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">Lonely mountain</h5>
                                    <p>
                                        <small>Published <u>10.01.2022</u> by Bilbo baggins</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/047.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">Let's go!</h5>
                                    <p>
                                        <small>Published <u>09.01.2022</u> by Halley Frank</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/028.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">A hut in the mountains</h5>
                                    <p>
                                        <small>Published <u>07.01.2022</u> by David Beak</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg"
                    data-mdb-ripple="true" data-mdb-ripple-color="light">
                    <img src="https://mdbootstrap.com/img/new/standard/nature/049.jpg" class="w-full" />
                    <a href="#!">
                        <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
                            style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="flex justify-start items-end h-full">
                                <div class="text-white m-6">
                                    <h5 class="font-bold text-lg mb-3">Beautiful waterfall</h5>
                                    <p>
                                        <small>Published <u>04.01.2022</u> by Joe Svan</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->

    <!-- Container for demo purpose -->
    <div class="container my-2 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-3  text-gray-900 dark:text-gray-100 text-center">

            <h2 class="text-3xl font-bold mb-12 pb-4 text-center">{{ __('Latest articles') }}</h2>

            <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
                <div class="mb-6 lg:mb-0">
                    <div class="relative block bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="flex">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                                <a href="#!">
                                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-3">My paradise</h5>
                            <p class="text-gray-500 mb-4">
                                <small>Published <u>13.01.2022</u> by
                                    <a href="" class="text-gray-900">Anna Maria Doe</a></small>
                            </p>
                            <p class="mb-4 pb-2">
                                Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                placerat vulputate. Ut vulputate est non quam dignissim
                                elementum. Donec a ullamcorper diam.
                            </p>
                            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                                more</a>
                        </div>
                    </div>
                </div>

                <div class="mb-6 lg:mb-0">
                    <div class="relative block bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="flex">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/031.webp" class="w-full" />
                                <a href="#!">
                                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-3">Travel to Italy</h5>
                            <p class="text-gray-500 mb-4">
                                <small>Published <u>12.01.2022</u> by
                                    <a href="" class="text-gray-900">Halley Frank</a></small>
                            </p>
                            <p class="mb-4 pb-2">
                                Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                diam orci, nec ornare metus semper sed. Integer volutpat
                                ornare erat sit amet rutrum.
                            </p>
                            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                                more</a>
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="relative block bg-white dark:bg-gray-800 rounded-lg shadow-lg">
                        <div class="flex">
                            <div class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                                data-mdb-ripple="true" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/081.webp" class="w-full" />
                                <a href="#!">
                                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                        style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-3">Chasing the sun</h5>
                            <p class="text-gray-500 mb-4">
                                <small>Published <u>10.01.2022</u> by
                                    <a href="" class="text-gray-900">Joe Svan</a></small>
                            </p>
                            <p class="mb-4 pb-2">
                                Curabitur tristique, mi a mollis sagittis, metus felis mattis
                                arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                                massa volutpat feugiat. Donec.
                            </p>
                            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->



    <script>
        // create an array of objects with the id, trigger element (eg. button), and the content element
        const accordionItems = [{
                id: 'accordion-example-heading-1',
                triggerEl: document.querySelector('#accordion-example-heading-1'),
                targetEl: document.querySelector('#accordion-example-body-1'),
                active: true
            },
            {
                id: 'accordion-example-heading-2',
                triggerEl: document.querySelector('#accordion-example-heading-2'),
                targetEl: document.querySelector('#accordion-example-body-2'),
                active: false
            },
            {
                id: 'accordion-example-heading-3',
                triggerEl: document.querySelector('#accordion-example-heading-3'),
                targetEl: document.querySelector('#accordion-example-body-3'),
                active: false
            }
        ];

        // options with default values
        const options = {
            alwaysOpen: true,
            activeClasses: 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white',
            inactiveClasses: 'text-gray-500 dark:text-gray-400',
            onOpen: (item) => {
                console.log('accordion item has been shown');
                console.log(item);
            },
            onClose: (item) => {
                console.log('accordion item has been hidden');
                console.log(item);
            },
            onToggle: (item) => {
                console.log('accordion item has been toggled');
                console.log(item);
            },
        };
    </script>


</x-app-layout>
