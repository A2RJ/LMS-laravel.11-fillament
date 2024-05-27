<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Samawa</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-[#f6f5f5]">
    <div class="sticky top-0 z-40 w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: false }" class="flex flex-col container mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:py-4">
            <div class="flex flex-row items-center justify-between">
                <a href="#" class="flex items-center whitespace-nowrap text-2xl font-black" title="Samawa Daring">
                    <span class="mr-2 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <g fill="none">
                                <circle cx="16" cy="16" r="16" fill="#008CE7" />
                                <g fill="#FFF">
                                    <path d="M19.086 8.004H11.81l-.602 3.367l6.562.01c3.231 0 4.19 1.173 4.159 3.12c-.014.998-.449 2.686-.633 3.23c-.497 1.46-1.521 3.122-5.359 3.117l-6.378-.004l-.602 3.371h7.257c2.559 0 3.649-.299 4.8-.83c2.554-1.178 4.075-3.701 4.686-6.994c.906-4.9-.224-8.387-6.615-8.387z" />
                                    <path d="M15.807 15.798c.237-.985.312-1.38.312-1.38H8.673c-1.904 0-2.176 1.24-2.357 1.99c-.237.981-.312 1.381-.312 1.381h7.447c1.903 0 2.175-1.24 2.356-1.991" />
                                </g>
                            </g>
                        </svg>
                    </span>
                    SAMADA
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-start md:flex-row">
                <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Home</a>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Categories</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Sakeco</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Balawas</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Cerpen</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Pantun</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Lebih banyak...</a>
                        </div>
                    </div>
                </div>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Cources</a>
            </nav>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a href="#" class="m-1 inline-flex items-center gap-1 rounded-lg border bg-white px-3 py-2 font-medium text-sm text-blue-600 shadow hover:bg-blue-50"> Sign In </a>
                <a href="#" class="m-1 inline-flex items-center gap-1 rounded-lg border border-transparent bg-blue-600 px-3 py-2 font-medium text-sm text-white hover:bg-blue-700"> Sign Up </a>
            </nav>
        </div>
    </div>


    <div class="container m-auto p-2">

        <!-- categories -->
        <div class="items-center p-4">
            <h1 class="text-2xl font-bold flex items-center gap-1">Categories</h1>

            <div class="grid grid-cols-5 gap-4 mt-4">
                <div class="bg-white group h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Sakeco</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                                </svg>
                                <span>120 Cources</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                                </svg>
                                <span>240 Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Sakeco</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                                </svg>
                                <span>120 Cources</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                                </svg>
                                <span>240 Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Sakeco</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                                </svg>
                                <span>120 Cources</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                                </svg>
                                <span>240 Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Sakeco</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                                </svg>
                                <span>120 Cources</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                                </svg>
                                <span>240 Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Sakeco</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                                </svg>
                                <span>120 Cources</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                                </svg>
                                <span>240 Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-3">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#43c2e5]" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M11.8 13H15q.425 0 .713-.288T16 12t-.288-.712T15 11h-3.2l.9-.9q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275l-2.6 2.6q-.3.3-.3.7t.3.7l2.6 2.6q.275.275.7.275t.7-.275t.275-.7t-.275-.7zm.2 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#43c2e5]" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m12 16l4-4l-4-4l-1.4 1.4l1.6 1.6H8v2h4.2l-1.6 1.6zm0 6q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- cources -->
        <div class="mb-8">
            <div class="grid grid-cols-2 items-center py-4 mb-4">
                <h1 class="text-2xl font-bold flex items-center gap-1">
                    <span>Popular Cources</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#ffee00] h-5 w-5" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="m19.555 23.411l-6.664-3.285a1.261 1.261 0 0 0-1.202.045l.006-.003l-6.416 3.75a.61.61 0 0 1-.902-.626v.003l.994-7.542a1.248 1.248 0 0 0-.392-1.082l-.001-.001l-4.571-4.247a1.265 1.265 0 0 1 .648-2.17l.007-.001l5.987-1.108c.421-.078.765-.355.935-.727l.003-.008L10.478.746a1.272 1.272 0 0 1 2.271-.087l.003.007l2.881 5.471c.197.365.558.62.981.666h.006l6.045.681a1.265 1.265 0 0 1 .811 2.119l.001-.001l-4.27 4.562a1.251 1.251 0 0 0-.315 1.116l-.001-.008l1.52 7.453a.61.61 0 0 1-.86.683l.004.002z" />
                    </svg>
                </h1>
                <div class="flex justify-end">
                    <form class="relative flex w-full max-w-2xl items-center justify-between rounded-md border border-slate-300">
                        <svg class="absolute left-2 block h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" class=""></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                        </svg>
                        <input type="name" name="search" class="h-12 w-full rounded-md text-slate-500 py-4 pr-40 pl-12 outline-none focus:ring-2" placeholder="Search Cources" />
                        <button type="submit" class="absolute right-0 mr-1 inline-flex h-10  items-center justify-center rounded-lg bg-[#43c2e5] px-10 font-medium text-white focus:ring-4 hover:bg-gray-700">Search</button>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-4 gap-4">
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/pantun.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco basa samawa untuk pemula (bahasa sumbawa for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/pantun.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/rebana.jpg') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/rebana.jpg') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/pantun.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48" src="{{ asset('/balawas.webp') }}" alt="blog" />
                    <h2 class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>3 Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>Sulkarnaen, S.Bud</span>
                            </p>
                            <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                </svg>
                                <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                    <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-xl px-4 md:px-8">
                <!-- Heading -->
                <div class="mb-10 md:mb-16">
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Most Recent Posts</h2>

                    <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>
                </div>
                <!-- /Heading -->
                <div class="grid gap-8 sm:grid-cols-2 sm:gap-12 lg:grid-cols-2 xl:grid-cols-2 xl:gap-16">
                    <!-- Article -->
                    <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
                        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 md:h-24 md:w-24 lg:h-40 lg:w-40">
                            <img src="https://images.unsplash.com/photo-1476362555312-ab9e108a0b7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex flex-col gap-2">
                            <span class="text-sm text-gray-400">April 2, 2022</span>

                            <h2 class="text-xl font-bold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">The Pines and the Mountains</a>
                            </h2>

                            <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

                            <div>
                                <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /Article -->
                    <!-- Article -->
                    <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
                        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 md:h-24 md:w-24 lg:h-40 lg:w-40">
                            <img src="https://images.unsplash.com/photo-1511376777868-611b54f68947?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex flex-col gap-2">
                            <span class="text-sm text-gray-400">April 2, 2022</span>

                            <h2 class="text-xl font-bold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">The Coding Mania</a>
                            </h2>

                            <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

                            <div>
                                <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /Article -->
                    <!-- Article -->
                    <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
                        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 md:h-24 md:w-24 lg:h-40 lg:w-40">
                            <img src="https://images.unsplash.com/photo-1496395031280-4201b0e022ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex flex-col gap-2">
                            <span class="text-sm text-gray-400">April 2, 2022</span>

                            <h2 class="text-xl font-bold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">Architectural Warfare</a>
                            </h2>

                            <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

                            <div>
                                <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /Article -->
                    <!-- Article -->
                    <article class="flex flex-col items-center gap-4 md:flex-row lg:gap-6">
                        <a href="#" class="group relative block h-56 w-full shrink-0 self-start overflow-hidden rounded-lg bg-gray-100 md:h-24 md:w-24 lg:h-40 lg:w-40">
                            <img src="https://images.unsplash.com/photo-1510081887155-56fe96846e71?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80" loading="lazy" alt="" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                        </a>

                        <div class="flex flex-col gap-2">
                            <span class="text-sm text-gray-400">April 2, 2022</span>

                            <h2 class="text-xl font-bold text-gray-800">
                                <a href="#" class="transition duration-100 hover:text-rose-500 active:text-rose-600">Blues in Architechture</a>
                            </h2>

                            <p class="text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint necessitatibus molestias explicabo.</p>

                            <div>
                                <a href="#" class="font-semibold text-rose-500 transition duration-100 hover:text-rose-600 active:text-rose-700">Read more</a>
                            </div>
                        </div>
                    </article>
                    <!-- /Article -->
                </div>
            </div>
        </section>


        <div class="items-center mt-20">
            <div class="max-w-screen-md mx-auto">
                <div class="rounded-lg border border-slate-300 bg-white py-2 px-3">
                    <nav class="flex flex-wrap gap-4">
                        <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-white bg-[#43c2e5] transition-all duration-200 ease-in-out hover:bg-[#43c2e5] hover:text-white"> Introduction </a>

                        <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-[#43c2e5] hover:text-white"> Session 1 </a>

                        <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-[#43c2e5] hover:text-white"> Session 2 </a>

                        <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-[#43c2e5] hover:text-white"> Session 3 </a>

                        <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-[#43c2e5] hover:text-white"> Session 4 </a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="item-center mt-20">
            <div class="bg-gray-100 px-2 py-10">
                <div class="mx-auto my-10 flex max-w-md flex-col rounded-2xl bg-white px-4 shadow md:max-w-5xl md:flex-row md:items-center">
                    <div class="shrink-0 my-4 md:mr-8 md:max-w-sm">
                        <img class="rounded-2xl" src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" />
                    </div>
                    <div class="py-4 sm:py-8">
                        <a href="#" class="mb-6 block text-2xl font-medium text-gray-700">Long walks are helpful in decreasing stress levels</a>
                        <p class="mb-6 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit illum consequatur quia doloremque! Similique eius enim nostrum totam.</p>
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-full object-cover" src="/images/ddHJYlQqOzyOKm4CSCY8o.png" alt="Simon Lewis" />
                            <p class="ml-4 w-56">
                                <strong class="block font-medium text-gray-700">Johanson Levinsiki</strong>
                                <span class="text-sm text-gray-400">Jun 26, 2024</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="relative mx-auto w-full py-16 px-5 font-sans text-gray-800 sm:px-20 md:max-w-screen-lg lg:py-24">
            <h2 class="mb-5 text-center font-sans text-4xl sm:text-5xl font-bold">Frequently asked Questions</h2>
            <p class="mb-12 text-center text-lg text-gray-600">We have written down answers to some of the frequently asked questions. But, if you still have any queries, feel free to ping us on chat.</p>
            <ul class="space-y-4">
                <li class="text-left">
                    <label for="accordion-1" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                        <input class="peer hidden" type="checkbox" id="accordion-1" checked />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                            <h3 class="text-sm text-gray-600 lg:text-base">Is there a free trial with Appsy?</h3>
                        </div>
                        <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                            <div class="p-5">
                                <p class="text-sm">Lorem ipsum, consectetur adipisicing elit. Adipisci eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor mollitia modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis quos laboriosam similique nihil.</p>
                            </div>
                        </div>
                    </label>
                </li>

                <li class="text-left">
                    <label for="accordion-2" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                        <input class="peer hidden" type="checkbox" id="accordion-2" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                            <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit?</h3>
                        </div>
                        <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                            <div class="p-5">
                                <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit. Adipisci eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor mollitia modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis quos laboriosam similique nihil.</p>
                            </div>
                        </div>
                    </label>
                </li>

                <li class="text-left">
                    <label for="accordion-3" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                        <input class="peer hidden" type="checkbox" id="accordion-3" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                            <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio.?</h3>
                        </div>
                        <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                            <div class="p-5">
                                <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit. Adipisci eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor mollitia modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis quos laboriosam similique nihil.</p>
                            </div>
                        </div>
                    </label>
                </li>

                <li class="text-left">
                    <label for="accordion-4" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                        <input class="peer hidden" type="checkbox" id="accordion-4" />
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                        <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                            <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet.?</h3>
                        </div>
                        <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                            <div class="p-5">
                                <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit. Adipisci eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor mollitia modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis quos laboriosam similique nihil.</p>
                            </div>
                        </div>
                    </label>
                </li>
            </ul>
            <div class="mt-10 flex justify-center">
                <a class="inline-flex cursor-pointer rounded-full bg-blue-500 py-3 px-5 text-lg text-white" href="#">Still have questions?</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="mx-auto grid max-w-screen-xl gap-y-8 gap-x-12 px-4 py-10 sm:px-20 md:grid-cols-2 xl:grid-cols-4 xl:px-10">
            <div class="max-w-sm">
                <div class="mb-6 flex h-10 items-center space-x-2">
                    <img class="h-full object-contain" src="/images/logo-circle.png" alt="" />
                    <span class="text-lg font-medium">SAMADA</span>
                </div>
                <div class="text-gray-500">Samawa Daring</div>
            </div>
            <div class="">
                <div class="mt-4 mb-2 font-medium xl:mb-4">Guides</div>
                <nav aria-label="Guides Navigation" class="text-gray-500">
                    <ul class="space-y-3">
                        <li><a class="hover:text-blue-600 hover:underline" href="#">How to make a footer</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Designing your app</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Getting help from the community</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Pricing vs Hourly Rate</a></li>
                    </ul>
                </nav>
            </div>
            <div class="">
                <div class="mt-4 mb-2 font-medium xl:mb-4">Links</div>
                <nav aria-label="Footer Navigation" class="text-gray-500">
                    <ul class="space-y-3">
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Pricing</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Demo</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Press</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Support Hub</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="">
                <div class="mt-4 mb-2 font-medium xl:mb-4">Support Us on Product Hunt</div>
                <div class="flex flex-col">
                    <div class="mb-4">
                        <a href="https://www.producthunt.com/products/Apple?utm_source=badge-follow&utm_medium=badge&utm_souce=badge-Apple" target="_blank"><img src="https://api.producthunt.com/widgets/embed-image/v1/follow.svg?post_id=100070&theme=light" alt="Apple - Think&#0032;Different | Product Hunt" style="width: 250px; height: 54px;" width="250" height="54" /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>