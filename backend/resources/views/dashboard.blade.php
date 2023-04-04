<x-app-layout>
    <x-slot name="header">
        {{ __('pages.dashboard') }}
    </x-slot>

    <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
        <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0">
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(123).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50">
                    </div>
                </div>
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(124).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50">
                    </div>
                </div>
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Second slide label</h5>
                    <p>
                        Some representative placeholder content for the second slide.
                    </p>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="relative overflow-hidden bg-cover bg-no-repeat" style="background-position: 50%">
                    <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(125).jpg" class="block w-full" />
                    <div
                        class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-black bg-fixed opacity-50">
                    </div>
                </div>
                <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                    <h5 class="text-xl">Third slide label</h5>
                    <p>
                        Some representative placeholder content for the third slide.
                    </p>
                </div>
            </div>
        </div>
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
            <span class="inline-block h-8 w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-3">
            <div class="bg-white dark:bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900 dark:text-gray-100">

                    <section class="my-3 text-center">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                            <div class="relative mb-12 px-3 lg:mb-0">
                                <div class="mb-2 flex justify-center">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-14 w-14">
                                            <path
                                                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="mb-6 font-bold text-primary">5000+</h5>
                                <h6 class="mb-0 font-normal dark:text-neutral-50">Components</h6>
                                <div
                                    class="absolute top-0 right-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block">
                                </div>
                            </div>
                            <div class="relative mb-12 px-3 lg:mb-0">
                                <div class="mb-2 flex justify-center">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-14 w-14">
                                            <path
                                                d="M11.644 1.59a.75.75 0 01.712 0l9.75 5.25a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.712 0l-9.75-5.25a.75.75 0 010-1.32l9.75-5.25z" />
                                            <path
                                                d="M3.265 10.602l7.668 4.129a2.25 2.25 0 002.134 0l7.668-4.13 1.37.739a.75.75 0 010 1.32l-9.75 5.25a.75.75 0 01-.71 0l-9.75-5.25a.75.75 0 010-1.32l1.37-.738z" />
                                            <path
                                                d="M10.933 19.231l-7.668-4.13-1.37.739a.75.75 0 000 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 000-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 01-2.134-.001z" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="mb-6 font-bold text-primary">490+</h5>
                                <h6 class="mb-0 font-normal dark:text-neutral-50">Design blocks</h6>
                                <div
                                    class="absolute top-0 right-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block">
                                </div>
                            </div>
                            <div class="relative mb-12 px-3 lg:mb-0">
                                <div class="mb-2 flex justify-center">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="h-14 w-14">
                                            <path fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="mb-6 font-bold text-primary">100+</h5>
                                <h6 class="mb-0 font-normal dark:text-neutral-50">Templates</h6>
                                <div
                                    class="absolute top-0 right-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100 lg:block">
                                </div>
                            </div>
                            <div class="relative mb-12 px-3 lg:mb-0">
                                <div class="mb-2 flex justify-center">
                                    <span class="text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="h-14 w-14">
                                            <path fill-rule="evenodd"
                                                d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <h5 class="mb-6 font-bold text-primary">28</h5>
                                <h6 class="mb-0 font-normal dark:text-neutral-50">Plugins</h6>
                            </div>
                        </div>
                    </section>

                    {{-- <script async src="https://telegram.org/js/telegram-widget.js?21" data-telegram-post="adep_uz/2977" data-width="100%"></script>

                    <div class="p-3 flex justify-center item-center">
                        <script async src="https://telegram.org/js/telegram-widget.js?21" data-telegram-share-url="{{ route('admin.dashboard') }}" data-comment="{{ __("About") }}" data-size="large" data-text="notext"></script>
                    </div> --}}


                </div>
            </div>
        </div>
    </div>


    {{-- <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
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
                    {{ $count_users }}
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
                    {{ $count_posts }}
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
    </div> --}}

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

</x-app-layout>
