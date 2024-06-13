<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMADA</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="bg-[#f6f5f5]">
  <div id="navbar" class="sticky top-0 z-20 w-full text-gray-700 bg-white transition duration-200 dark:text-gray-200 dark:bg-gray-800 shadow">
     <div x-data="{ open: false }"
            class="max-w-screen-lg lg:max-w-screen-xl flex flex-col container mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:py-4">
            <div class="flex flex-row items-center justify-between">
                <a href="/" class="flex items-center whitespace-nowrap text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-500 to-blue-500" title="Samawa Daring">
                    <span class="mr-2 9">
                        <sv9 xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <g fill="none">
                                <circle cx="16" cy="16" r="16" fill="#008CE7" />
                                <g fill="#FFF">
                                    <path
                                        d="M19.086 8.004H11.81l-.602 3.367l6.562.01c3.231 0 4.19 1.173 4.159 3.12c-.014.998-.449 2.686-.633 3.23c-.497 1.46-1.521 3.122-5.359 3.117l-6.378-.004l-.602 3.371h7.257c2.559 0 3.649-.299 4.8-.83c2.554-1.178 4.075-3.701 4.686-6.994c.906-4.9-.224-8.387-6.615-8.387z" />
                                    <path
                                        d="M15.807 15.798c.237-.985.312-1.38.312-1.38H8.673c-1.904 0-2.176 1.24-2.357 1.99c-.237.981-.312 1.381-.312 1.381h7.447c1.903 0 2.175-1.24 2.356-1.991" />
                                </g>
                            </g>
                            </svg>
                    </span>
                    SAMADA
                </a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pl-6 pb-4 md:pb-0 hidden md:flex md:justify-start md:flex-row">
                <a href="/"
                    class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Home</a>
                <!-- <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>Categories</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md md:w-48">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Sakeco</a>
                            <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Balawas</a>
                            <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Cerpen</a>
                            <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Pantun</a>
                            <a href="#" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent hover:bg-blue-500 hover:text-white rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Lebih banyak...</a>
                        </div>
                    </div>
                </div> -->
                <a href="{{ route('course') }}"
                    class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Course</a>
                @auth
                    <a href="{{ route('my.course') }}"
                        class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">My
                        Course</a>
                @endauth
            </nav>
            <nav :class="{ 'flex': open, 'hidden': !open }"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                @auth
                    <div class="relative inline-block">
                        <div id="avatarButton"
                            class="border cursor-pointer border-blue-500 cursor-pointerrelative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-slate-100 rounded-full dark:bg-slate-600">
                            <span class="font-bold text-lg text-slate-600 dark:text-slate-300">
                                @php
                                    $user = Auth::user();
                                    $userFullName = $user->name;
                                    $nameParts = explode(' ', $userFullName);
                                    if (count($nameParts) >= 2) {
                                        echo strtoupper($nameParts[0][0] . $nameParts[1][0]);
                                    } else {
                                        echo strtoupper(substr($userFullName, 0, 2));
                                    }
                                @endphp
                            </span>
                        </div>

                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="-left-36 hidden absolute top-full mt-2 w-44 bg-white divide-y divide-slate-100 rounded-lg shadow-lg dark:bg-slate-700 dark:divide-slate-600 z-10">
                            <div class="px-4 py-3 text-sm text-slate-900 dark:text-white">
                                <div class="line-clamp-1">{{ $userFullName }}</div>
                                <div class="font-medium truncate line-clamp-1">{{ $user->email }}</div>
                            </div>
                            <ul class="py-2 text-sm text-slate-700 dark:text-slate-200" aria-labelledby="avatarButton">
                                <li>
                                    <a href="{{ route('my.course') }}"
                                        class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">My
                                        Course</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Profile</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-200 dark:hover:text-white">Sign
                                    out</a>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="m-1 inline-flex items-center gap-1 rounded-lg border bg-white px-3 py-2 font-medium text-sm text-blue-600 shadow hover:bg-blue-50">
                        Log in </a>
                    <a href="{{ route('register') }}"
                        class="m-1 inline-flex items-center gap-1 rounded-lg border border-transparent bg-blue-600 px-3 py-2 font-medium text-sm text-white hover:bg-blue-700">
                        Register </a>
                @endauth
            </nav>
        </div>
    </div>

    <div class="container md:p-4 max-w-screen-lg lg:max-w-screen-xl mx-auto">
        @yield('content')
    </div>

    <footer class="bg-white">
        <div
            class="mx-auto grid max-w-screen-xl gap-y-8 gap-x-12 px-4 py-10 sm:px-20 md:grid-cols-2 xl:grid-cols-4 xl:px-10">
            <div class="max-w-sm">
                <div class="mb-6 flex h-10 items-center space-x-2">
                    <!-- <img class="h-full object-contain" src="/images/logo-circle.png" alt="" /> -->
                    <span class="text-lg font-medium">SAMADA</span>
                </div>
                <div class="text-gray-500">Samawa Daring</div>
            </div>
            <div class="">
                <div class="mt-4 mb-2 font-medium xl:mb-4">Guides</div>
                <nav aria-label="Guides Navigation" class="text-gray-500">
                    <ul class="space-y-3">
                        <li><a class="hover:text-blue-600 hover:underline" href="#">How to make a footer</a>
                        </li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Designing your app</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Getting help from the
                                community</a></li>
                        <li><a class="hover:text-blue-600 hover:underline" href="#">Pricing vs Hourly Rate</a>
                        </li>
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
                        <a href="https://www.producthunt.com/products/Apple?utm_source=badge-follow&utm_medium=badge&utm_souce=badge-Apple"
                            target="_blank"><img
                                src="https://api.producthunt.com/widgets/embed-image/v1/follow.svg?post_id=100070&theme=light"
                                alt="Apple - Think&#0032;Different | Product Hunt" style="width: 250px; height: 54px;"
                                width="250" height="54" /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('avatarButton').addEventListener('click', function() {
            var dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('hidden');
        });

        // Optional: Close the dropdown if user clicks outside of it
        document.addEventListener('click', function(event) {
            var dropdown = document.getElementById('userDropdown');
            var avatarButton = document.getElementById('avatarButton');
            if (!dropdown.contains(event.target) && !avatarButton.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });

         document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.getElementById('navbar');
            var navbarHeight = navbar.offsetHeight; // Tinggi navbar

            // Menambahkan event listener untuk mengatur efek saat scroll
            window.addEventListener('scroll', function() {
                // Ambil posisi scroll dari atas halaman
                var scrollPosition = window.scrollY || window.pageYOffset;

                // Jika posisi scroll melebihi tinggi navbar, tambahkan kelas bg-gradient-to-r
                if (scrollPosition > navbarHeight) {
                navbar.classList.add('bg-gradient-to-r');
                } else {
                // Jika tidak, hapus kelas bg-gradient-to-r
                navbar.classList.remove('bg-gradient-to-r');
                }
            });
        });
    </script>
</body>

</html>
