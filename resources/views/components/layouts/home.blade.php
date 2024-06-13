<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMADA</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/css/pagedone.css" />
</head>

<body class="bg-[#f6f5f5]">
    <nav class="border-b-default border-solid border-gray-200 z-20 w-full bg-inherit lg:fixed bg-white" id="topnav">
        <div class="mx-auto max-w-7xl lg:px-8">
            <div class="w-full flex flex-col lg:flex-row">
                <div class="flex justify-between lg:hidden px-4">
                    <a href="https://pagedone.io/" class="flex items-center">
                        SAMADA
                    </a>
                    <button data-collapse-toggle="navbar" type="button"
                        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden w-full lg:grid grid-cols-1 lg:grid-cols-3 max-lg:bg-white py-5 max-lg:mt-1 max-lg:px-4 max-lg:shadow-lg max-lg:shadow-gray-200 max-lg:h-auto max-lg:overflow-auto transition-all duration-500 delay-200 "
                    id="navbar">

                    <a href="/"
                        class="hidden lg:flex items-center text-2xl font-bold bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">
                        SAMADA
                    </a>

                    <ul
                        class="flex lg:justify-center lg:items-center max-lg:gap-4 max-lg:mb-4 flex-col mt-4 lg:flex-1 md:mt-0 lg:flex-row">
                        <li>
                            <a href="/"
                                class="text-gray-500 text-sm font-medium hover:text-prime-blue-700 transition-all duration-500 mb-2 block lg:mr-6 lg:text-base md:mb-0 md:mr-3 hover:text-gray-900">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('course') }}"
                                class="text-gray-500 text-sm font-medium hover:text-prime-blue-700 transition-all duration-500 mb-2 block lg:mr-6 lg:text-base md:mb-0 md:mr-3 hover:text-gray-900">
                                Course
                            </a>
                        </li>

                        <li class="relative">
                            <button data-target="megamenu"
                                class="dropdown-toggle flex items-center justify-between text-gray-500 text-sm lg:text-base font-medium hover:text-prime-blue-700 transition-all duration-500 lg:mr-6 lg:mb-0 mr-auto lg:text-left  lg:m-0 hover:text-gray-900">
                                Category
                                <svg class="w-3 h-2 ml-1.5 dropdown-active-rotate-180" width="10" height="6"
                                    viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 1L3.58579 3.58579C4.25245 4.25245 4.58579 4.58579 5 4.58579C5.41421 4.58579 5.74755 4.25245 6.41421 3.58579L9 1"
                                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="megamenu" aria-labelledby="megamenu"
                                class="animate-fade z-10 relative lg:absolute top-2 lg:top-14  lg:-left-20 bg-white rounded-lg shadow-[0px_15px_30px_0px_rgba(16,24,40,0.1)] xl:p-8 lg:p-4 p-2 lg:min-w-[800px] md:min-w-[500px] min-w-full open hidden">
                                <div class="flex flex-col sm:flex-row lg:justify-between">
                                    <ul class="text-sm text-gray-700 lg:w-1/2">
                                        <h6 class="font-medium text-sm text-gray-500 mb-2">
                                            Features
                                        </h6>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 transition-all duration-500 hover:bg-gray-50 hover:rounded-xl flex items-center">
                                                <div
                                                    class="bg-orange-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M23.75 16.625C23.75 15.3133 22.6867 14.25 21.375 14.25H7.125C5.81332 14.25 4.75 15.3133 4.75 16.625V30.875C4.75 32.1867 5.81332 33.25 7.125 33.25H21.375C22.6867 33.25 23.75 32.1867 23.75 30.875V16.625Z"
                                                            fill="#F59E0B"></path>
                                                        <path
                                                            d="M12.6665 15.0417C12.6665 20.7256 17.2742 25.3333 22.9582 25.3333C28.6421 25.3333 33.2498 20.7256 33.2498 15.0417C33.2498 9.35774 28.6421 4.75 22.9582 4.75C17.2742 4.75 12.6665 9.35774 12.6665 15.0417Z"
                                                            fill="#F59E0B"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                        Sakeco
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        Real time notification always keep you up to date
                                                        in realtime
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                                <div
                                                    class="bg-emerald-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M25.3333 6.84527C25.3333 5.62971 24.3452 4.6322 23.1365 4.76127C21.1735 4.97089 19.2468 5.46081 17.416 6.21916C14.9059 7.25888 12.6251 8.78283 10.704 10.704C8.78283 12.6251 7.25888 14.9059 6.21916 17.416C5.46081 19.2468 4.97089 21.1735 4.76127 23.1365C4.6322 24.3452 5.62971 25.3333 6.84526 25.3333H23.1324C24.3479 25.3333 25.3333 24.3479 25.3333 23.1324L25.3333 6.84527Z"
                                                            fill="#10B981"></path>
                                                        <path
                                                            d="M31.6668 13.1788C31.6668 11.9632 30.6787 10.9657 29.47 11.0948C27.507 11.3044 25.5803 11.7943 23.7495 12.5527C21.2394 13.5924 18.9586 15.1163 17.0375 17.0375C15.1163 18.9586 13.5924 21.2394 12.5527 23.7495C11.7943 25.5803 11.3044 27.507 11.0948 29.47C10.9657 30.6787 11.9632 31.6668 13.1788 31.6668H29.4659C30.6814 31.6668 31.6668 30.6814 31.6668 29.4659V13.1788Z"
                                                            fill="#10B981"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                        Balawas
                                                        <span
                                                            class="bg-indigo-50 text-indigo-500 text-xs font-medium mr-2 px-2.5 py-1 rounded-full h-5 ml-4">New</span>
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        Analyze data to make more informed and accurate
                                                        business decision
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                                <div
                                                    class="bg-blue-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M4.75 22.1667C4.75 26.5389 8.29441 30.0833 12.6667 30.0833H22.0227C22.9767 30.0833 23.75 29.31 23.75 28.3561V15.9773C23.75 15.0233 22.9767 14.25 22.0227 14.25H12.6667C8.29441 14.25 4.75 17.7944 4.75 22.1667Z"
                                                            fill="#3B82F6"></path>
                                                        <path
                                                            d="M33.25 14.2502C33.25 18.6224 29.7056 22.1668 25.3333 22.1668H15.9773C15.0233 22.1668 14.25 21.3935 14.25 20.4396V8.06077C14.25 7.10682 15.0233 6.3335 15.9773 6.3335H25.3333C29.7056 6.3335 33.25 9.87791 33.25 14.2502Z"
                                                            fill="#3B82F6"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                        Pantun
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        Get started by taking advantage of integration
                                                        with other services
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="text-sm text-gray-700 dark:text-gray-400 lg:w-1/2"
                                        aria-labelledby="dropdownLargeButton">
                                        <h6 class="font-medium text-sm text-gray-500 mb-2">
                                            Features
                                        </h6>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                                <div
                                                    class="bg-rose-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M15.092 11.4813C16.0377 10.9509 17.2126 10.9509 18.1583 11.4813L25.4363 15.5637C26.3539 16.0783 26.9168 17.0148 26.9168 18.0265V26.3072C26.9168 27.3189 26.3539 28.2553 25.4363 28.77L18.1583 32.8523C17.2126 33.3828 16.0377 33.3828 15.092 32.8523L7.81401 28.77C6.89644 28.2553 6.3335 27.3189 6.3335 26.3072V18.0265C6.3335 17.0148 6.89644 16.0783 7.81401 15.5637L15.092 11.4813Z"
                                                            fill="#F43F5E"></path>
                                                        <path
                                                            d="M20.2043 4.82947C21.0987 4.30099 22.2098 4.30099 23.1041 4.82946L29.9869 8.8966C30.8547 9.40936 31.3871 10.3423 31.3871 11.3502V19.6001C31.3871 20.608 30.8547 21.541 29.9869 22.0537L23.1041 26.1209C22.2098 26.6494 21.0987 26.6494 20.2044 26.1209L13.3215 22.0537C12.4538 21.541 11.9214 20.608 11.9214 19.6001V11.3502C11.9214 10.3423 12.4538 9.40936 13.3215 8.8966L20.2043 4.82947Z"
                                                            fill="#F43F5E"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                        Cerpen
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        To ensure your privacy all information are highly
                                                        encrypted
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                                <div
                                                    class="bg-indigo-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M11.1086 7.89499C11.4505 6.95739 12.342 6.3335 13.34 6.3335H23.5237C25.1727 6.3335 26.3199 7.97275 25.755 9.522L20.5597 23.772C20.2179 24.7096 19.3264 25.3335 18.3284 25.3335H8.14465C6.49564 25.3335 5.34848 23.6942 5.91332 22.145L11.1086 7.89499Z"
                                                            fill="#4F46E5"></path>
                                                        <path
                                                            d="M17.4416 14.228C17.7835 13.2904 18.675 12.6665 19.673 12.6665H29.8567C31.5057 12.6665 32.6529 14.3058 32.088 15.855L26.8927 30.105C26.5509 31.0426 25.6594 31.6665 24.6614 31.6665H14.4777C12.8286 31.6665 11.6815 30.0273 12.2463 28.478L17.4416 14.228Z"
                                                            fill="#4F46E5"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-gray-900 text-base mb-1.5 font-semibold">
                                                        Sakeco
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        Organized documentation will help you save tone of
                                                        your time
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:;"
                                                class="px-2 lg:px-3 py-2 lg:py-5 hover:bg-gray-50 hover:rounded-xl flex items-center transition-all duration-500">
                                                <div
                                                    class="bg-cyan-50 rounded-lg w-12 h-12 flex items-center justify-center">
                                                    <svg width="38" height="38" viewBox="0 0 38 38"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M24.5114 33.2423C26.9097 33.0921 29.1569 32.0322 30.7847 30.2836C32.4125 28.535 33.2952 26.2325 33.249 23.856C33.2028 21.4795 32.2312 19.2123 30.5366 17.5269C28.842 15.8415 26.5553 14.868 24.1529 14.8091H16.5879C15.6055 14.8091 14.8096 15.5892 14.8096 16.568V24.0221C14.8075 25.2655 15.06 26.4965 15.5517 27.6408C16.0433 28.7851 16.7641 29.8192 17.6706 30.6806C18.5771 31.5421 19.6505 32.2132 20.8261 32.6534C22.0018 33.0937 23.2554 33.294 24.5114 33.2423Z"
                                                            fill="#06B6D4"></path>
                                                        <path
                                                            d="M13.4894 4.75796C11.091 4.90819 8.84381 5.96805 7.21604 7.71666C5.58826 9.46527 4.7055 11.7677 4.75173 14.1442C4.79795 16.5207 5.76959 18.7879 7.46415 20.4733C9.15872 22.1587 11.4455 23.1323 13.8479 23.1912H21.4129C21.8845 23.1912 22.3368 23.0059 22.6703 22.676C23.0038 22.3461 23.1912 21.8988 23.1912 21.4323V13.9781C23.1932 12.7347 22.9408 11.5038 22.4491 10.3595C21.9574 9.21514 21.2366 8.18109 20.3301 7.31962C19.4236 6.45815 18.3503 5.78708 17.1746 5.34683C15.9989 4.90659 14.7454 4.70628 13.4894 4.75796Z"
                                                            fill="#06B6D4"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-4 w-4/5">
                                                    <h5 class="text-blue-500 underline text-base mb-1.5 font-semibold">
                                                        Explore more
                                                    </h5>
                                                    <p class="text-xs font-medium text-gray-400">
                                                        Muat lebih banyak
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        @auth
                            <li>
                                <a href="{{ route('my.course') }}"
                                    class="text-gray-500 text-sm font-medium hover:text-prime-blue-700 transition-all duration-500 mb-2 block lg:mr-6 lg:text-base md:mb-0 md:mr-3 hover:text-gray-900">
                                    My Course
                                </a>
                            </li>
                        @endauth
                    </ul>

                    @auth
                        <div
                            class="flex lg:items-center justify-start flex-col lg:flex-row max-lg:gap-4 lg:flex-1 lg:justify-end">
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

                                <div id="userDropdown"
                                    class="-left-36 hidden absolute top-full mt-2 w-44 bg-white divide-y divide-slate-100 rounded-lg shadow-lg dark:bg-slate-700 dark:divide-slate-600 z-10">
                                    <div class="px-4 py-3 text-sm text-slate-900 dark:text-white">
                                        <div class="line-clamp-1">{{ $userFullName }}</div>
                                        <div class="font-medium truncate line-clamp-1">{{ $user->email }}</div>
                                    </div>
                                    <ul class="py-2 text-sm text-slate-700 dark:text-slate-200"
                                        aria-labelledby="avatarButton">
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
                        </div>
                    @else
                        <div
                            class="flex lg:items-center justify-start flex-col lg:flex-row max-lg:gap-4 lg:flex-1 lg:justify-end">
                            <a href="{{ route('login') }}">
                                <button
                                    class="bg-indigo-100 text-indigo-600 rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 py-3 px-6 text-sm hover:bg-indigo-200">
                                    Login
                                </button>
                            </a>
                            <a href="{{ route('register') }}">
                                <button
                                    class="bg-indigo-600 text-white rounded-full cursor-pointer font-semibold text-center shadow-xs transition-all duration-500 py-3 px-6 text-sm lg:ml-5 hover:bg-indigo-700">
                                    Sign up
                                </button>
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- container md:p-4 max-w-screen-lg lg:max-w-screen-xl mx-auto -->
    <div class="lg:py-[80px]">
        @yield('content')
    </div>

    <footer class="bg-white">
        <div
            class="mx-auto grid max-w-screen-xl gap-y-8 gap-x-12 px-4 py-10 sm:px-20 md:grid-cols-2 xl:grid-cols-4 xl:px-10">
            <div class="max-w-sm">
                <div class="mb-6 flex h-10 items-center space-x-2">
                    <!-- <img class="h-full object-contain" src="/images/logo-circle.png" alt="" /> -->
                    <span
                        class="text-lg font-medium bg-gradient-to-r from-cyan-500 to-blue-500 bg-clip-text text-transparent">SAMADA</span>
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

    <div class="relative">
        <button id="back-to-top"
            class="fixed hidden bottom-5 right-5 bg-blue-500 text-white px-3 py-1 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">
            ↑ Back to Top
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.1.2/src/js/pagedone.js"></script>
    <script>
        let backToTopButton = document.getElementById("back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        backToTopButton.addEventListener('click', function() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        });

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
