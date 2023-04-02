<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" :class="{ 'theme-dark': dark }" x-data="data()">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name', 'Laravel') }} - @if (isset($header))
            {{ $header }}
        @endif
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <!--  forma CSS  -->
    <link rel="stylesheet" href="/css/style.css">

    <!--  Iconscount CSS  -->
    <link rel="stylesheet" href="https://unicons.iconscount.com/release/v4.0.0/css/line.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('/assets/js/init-alpine.js') }}"></script>

</head>

<body class="font-sans antialiased">

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        <!-- Desktop sidebar -->
        <x-desktop-sidebar />

        <!-- Mobile sidebar -->
        <x-mobile-sidebar />

        <div class="flex flex-col flex-1 w-full">
            <x-header />

            <main class="h-full overflow-y-auto mb-3">
                <div class="container px-6 py-4 mx-auto grid">
                    <!-- Page Heading -->
                    @if (isset($header))
                        <h2 class="my-3 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            {{ $header }}
                        </h2>
                    @endif
                    {{ $slot }}

                </div>
            </main>
        </div>
    </div>

    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div> --}}
</body>

</html>
