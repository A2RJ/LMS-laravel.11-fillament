@extends('components.layouts.home')

@section('content')
<!-- Hero section -->
<div class="bg-white pt-4">
    <div class="grid grid-cols-2">
        <div class="flex flex-col justify-center items-start p-8">
            <p class="mb-4">Kini, belajar <br> <span class="whitespace-nowrap text-[#43c2e5] text-4xl uppercase font-bold">budaya Samawa</span> <br> lebih mudah dengan materi pembelajaran daring yang interaktif dan menarik.</p>
            <div class="flex -space-x-3 mt-4 justify-center items-center">
                <img class="h-10 w-10 rounded-full ring ring-white" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3.25&w=256&h=256&q=80" />
                <img class="h-10 w-10 rounded-full ring ring-white" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" />
                <img class="h-10 w-10 rounded-full ring ring-white" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" />
                <img class="h-10 w-10 rounded-full ring ring-white" src="https://images.unsplash.com/photo-1663996806932-357eddab9b50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" />
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white font-semibold text-black ring ring-white">13+</div>
                <p class="pl-3">Pelajar telah bergabung</p>
            </div>
        </div>
        <div class="pl-20">
            <img class="h-8/12 lg:h-72 max-w-lg rounded-lg object-cover" src="{{ asset('/hero.png') }}" />
        </div>
        <div class="col-span-2 h-6 bg-[#43c2e5]"></div>
    </div>
</div>

<!-- categories -->
<div class="items-center mt-4">
    <h1 class="text-2xl font-bold flex items-center gap-1">Categories</h1>

    <div class="grid grid-cols-5 gap-4 mt-4">
        <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('category.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Detail
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('category.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Detail
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('category.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Detail
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('category.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Detail
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('category.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Detail
                        </button>
                    </a>
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
<div class="mb-4">
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
                <button type="submit" class="absolute right-0 mr-1 inline-flex h-10  items-center justify-center rounded-lg bg-blue-500 px-10 font-medium text-white focus:ring-0">Search</button>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-4 gap-4">
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
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
                    <a href="{{ route('class.id', 12) }}">
                        <button class="px-3 py-1 border border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                            Mulai belajar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 flex justify-center">
        <a class="group inline-flex cursor-pointer rounded-full py-2 px-5 text-lg bg-blue-500 text-white hover:bg-white border border-transparent hover:border-blue-500" href="#">
            <span class="group-hover:text-blue-500">Lebih banyak</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
            </svg>
        </a>
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
        <a class="inline-flex cursor-pointer rounded-full bg-blue-500 py-2 px-5 text-lg text-white border hover:border-blue-500 hover:text-blue-500 hover:bg-white" href="#">Still have questions?</a>
    </div>
</div>

<div class="mx-auto max-w-screen-lg px-8 pt-10 pb-16 text-gray-700 md:pb-20">
    <div class="flex flex-wrap">
        <div class="w-full max-w-full flex-shrink-0 lg:mt-2 lg:w-1/3 lg:flex-none">
            <h2 class="mb-3 text-xs font-bold uppercase tracking-wide text-gray-500 xl:text-base">Our Partners</h2>
            <h3 class="mb-3 font-bold text-gray-800 sm:text-2xl xl:text-4xl">Trusted by over 300+ partners</h3>
            <p class="">We bring solutions to make life easier to learn sumbawanese culcture.</p>
        </div>
        <div class="w-full max-w-full py-10 lg:w-2/3 lg:flex-none lg:px-8 lg:py-0">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
                <div class="w-32">
                    <img src="/rebana.jpg" alt="" class="" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection