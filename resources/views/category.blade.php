@extends('components.layouts.home')

@section('content')
<div class="mx-auto flex flex-col mt-4 space-x-6 rounded-2xl bg-white p-6 md:flex-row md:items-start">
    <div class="shrink-0">
        <!-- <img class="rounded-2xl" src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" /> -->
        <img class="lg:h-60 lg:w-72 transform rounded-lg object-cover transition duration-500 ease-in-out group-hover:scale-105" src="{{ asset('/balawas.webp') }}" />
    </div>
    <div class="">
        <a href="#" class="mb-3 block text-2xl font-medium text-slate-800">Sakeco</a>
        <p class="mb-3 text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit illum consequatur quia doloremque! Similique eius enim nostrum totam.</p>
        <div class="flex flex-col space-y-1">
            <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M5.5 2H17a2.5 2.5 0 0 1 2.5 2.5v6.813a6.5 6.5 0 0 0-8.187 8.187H4.5a1 1 0 0 0 1 1h6.232A6.5 6.5 0 0 0 12.81 22H5.5A2.5 2.5 0 0 1 3 19.5v-15A2.5 2.5 0 0 1 5.5 2M7 5a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm16 12.5a5.5 5.5 0 1 0-11 0a5.5 5.5 0 0 0 11 0m-6.086-2.403l2.806 1.84q.131.084.205.223q.075.136.075.298a.65.65 0 0 1-.072.298a.6.6 0 0 1-.198.226l-2.807 1.915a.6.6 0 0 1-.158.077a.55.55 0 0 1-.395-.023a.7.7 0 0 1-.193-.135a.7.7 0 0 1-.13-.2a.6.6 0 0 1-.047-.237v-3.758a.62.62 0 0 1 .367-.57a.55.55 0 0 1 .547.045" />
                </svg>
                <span>120 Cources</span>
            </p>
            <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M24 14.6c0 .6-1.2 1-2.6 1.2c-.9-1.7-2.7-3-4.8-3.9c.2-.3.4-.5.6-.8h.8c3.1-.1 6 1.8 6 3.5M6.8 11H6c-3.1 0-6 1.9-6 3.6c0 .6 1.2 1 2.6 1.2c.9-1.7 2.7-3 4.8-3.9zm5.2 1c2.2 0 4-1.8 4-4s-1.8-4-4-4s-4 1.8-4 4s1.8 4 4 4m0 1c-4.1 0-8 2.6-8 5c0 2 8 2 8 2s8 0 8-2c0-2.4-3.9-5-8-5m5.7-3h.3c1.7 0 3-1.3 3-3s-1.3-3-3-3c-.5 0-.9.1-1.3.3c.8 1 1.3 2.3 1.3 3.7c0 .7-.1 1.4-.3 2M6 10h.3C6.1 9.4 6 8.7 6 8c0-1.4.5-2.7 1.3-3.7C6.9 4.1 6.5 4 6 4C4.3 4 3 5.3 3 7s1.3 3 3 3" />
                </svg>
                <span>240 Students</span>
            </p>
        </div>
        <div class="mt-6">
            <button class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Mulai pelajari sakeco</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-blue-500">
                    <path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                </svg>
                <div class="absolute inset-0 bg-white transform scale-x-0 origin-top-right transition-transform duration-300 group-hover:scale-x-100"></div>
            </button>
            <!-- <button class="group relative flex items-center justify-center px-3 py-1 overflow-hidden rounded-lg bg-blue-500 text-white">
                <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Mulai pelajari sakeco</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-blue-500">
                    <path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                </svg>
                <div class="absolute inset-0 w-full h-full transition-transform duration-300 scale-0 bg-white border border-blue-500 rounded-lg group-hover:scale-100"></div>
            </button> -->
        </div>
    </div>
</div>

<section class="px-4">
    <h1 class="mb-4 mt-6 text-2xl font-medium text-slate-700">Cource list:</h1>
    <div class="grid grid-cols-2 gap-4">
        <div class="flex flex-row bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
            <div class="p-4">
                <img class="rounded-lg object-cover object-center h-[200px] w-[200px]" src="{{ asset('/balawas.webp') }}" alt="blog" />
            </div>
            <div class="py-1 pr-4">
                <h2 class="title-font inline-block cursor-pointer pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-slate-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                <div class="flex flex-col space-y-1">
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                        </svg>
                        <span>3 Sessions</span>
                    </p>
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                        </svg>
                        <span>Sulkarnaen, S.Bud</span>
                    </p>
                    <div class="flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                        </svg>
                        <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <a href="{{ route('class.id', 12) }}" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                </div>
            </div>
        </div>
        <div class="flex flex-row bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
            <div class="p-4">
                <img class="rounded-lg object-cover object-center h-[200px] w-[200px]" src="{{ asset('/balawas.webp') }}" alt="blog" />
            </div>
            <div class="py-1 pr-4">
                <h2 class="title-font inline-block cursor-pointer pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-slate-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                <div class="flex flex-col space-y-1">
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                        </svg>
                        <span>3 Sessions</span>
                    </p>
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                        </svg>
                        <span>Sulkarnaen, S.Bud</span>
                    </p>
                    <div class="flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                        </svg>
                        <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <a href="{{ route('class.id', 12) }}" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                </div>
            </div>
        </div>
        <div class="flex flex-row bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
            <div class="p-4">
                <img class="rounded-lg object-cover object-center h-[200px] w-[200px]" src="{{ asset('/balawas.webp') }}" alt="blog" />
            </div>
            <div class="py-1 pr-4">
                <h2 class="title-font inline-block cursor-pointer pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-slate-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                <div class="flex flex-col space-y-1">
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                        </svg>
                        <span>3 Sessions</span>
                    </p>
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                        </svg>
                        <span>Sulkarnaen, S.Bud</span>
                    </p>
                    <div class="flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                        </svg>
                        <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <a href="{{ route('class.id', 12) }}" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                </div>
            </div>
        </div>
        <div class="flex flex-row bg-white group h-full overflow-hidden rounded-lg border border-slate-300">
            <div class="p-4">
                <img class="rounded-lg object-cover object-center h-[200px] w-[200px]" src="{{ asset('/balawas.webp') }}" alt="blog" />
            </div>
            <div class="py-1 pr-4">
                <h2 class="title-font inline-block cursor-pointer pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">Sakeco</h2>
                <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-slate-800 overflow-hidden mb-3">Kelas Sakeco untuk pemula (for beginner only)</h1>
                <div class="flex flex-col space-y-1">
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 48 48">
                            <path fill="currentColor" d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                        </svg>
                        <span>3 Sessions</span>
                    </p>
                    <p class="inline-flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                        </svg>
                        <span>Sulkarnaen, S.Bud</span>
                    </p>
                    <div class="flex items-center gap-1 text-sm leading-none text-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                        </svg>
                        <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 10%"> 0%</div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <a href="{{ route('class.id', 12) }}" class="border border-[#43c2e5] px-5 py-1 rounded-lg  font-semibold text-[#43c2e5] transition duration-100 hover:text-blue-600 active:text-blue-700">Mulai belajar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mt-3 mb-6">
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
</section>
@endsection