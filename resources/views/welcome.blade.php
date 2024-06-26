@extends('components.layouts.home')

@section('content')
<!-- Hero section -->
<section class="pt-8 bg-gradient-to-br from-white via-sky-200 to-white">
    <div class="max-w-screen-lg mx-auto">
        <div class="grid grid-cols-2">
            <div class="">
                <a href="{{ route('login') }}">
                    <div
                        class="border border-blue-600 p-1 w-60 mx-auto lg:mx-0 rounded-full flex items-center justify-between mb-4">
                        <span class="font-inter text-xs font-medium text-gray-900 ml-3">
                            Explore how to use.
                        </span>
                        <div href="javascript:;"
                            class="w-8 h-8 rounded-full flex justify-center items-center bg-blue-600">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.83398 8.00019L12.9081 8.00019M9.75991 11.778L13.0925 8.44541C13.3023 8.23553 13.4073 8.13059 13.4073 8.00019C13.4073 7.86979 13.3023 7.76485 13.0925 7.55497L9.75991 4.22241"
                                    stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </a>
                <h1 class="max-w-2xl font-manrope font-bold text-4xl text-gray-900 mb-5 md:text-5xl leading-[50px]">
                    Learn the culture of
                    <span class="text-blue-600"> Sumbawa</span>
                    with ease
                </h1>

                <p class="max-w-sm text-base font-normal leading-7 text-gray-500 mb-9">
                    Now, learning Samawa culture is easier with engaging and interactive online learning materials.
                </p>

                <a href="{{ route('register') }}"
                    class="w-full md:w-auto mb-14 inline-flex items-center justify-center py-3 px-7 text-base font-semibold text-center text-white rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 shadow-xs">
                    Create an account
                    <svg class="ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5 15L11.0858 11.4142C11.7525 10.7475 12.0858 10.4142 12.0858 10C12.0858 9.58579 11.7525 9.25245 11.0858 8.58579L7.5 5"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class=" flex justify-end items-end">
                <img class="h-60" src="/hero-2.png" alt="" srcset="/hero-2.png">
            </div>
        </div>
    </div>
</section>
<!-- categories -->
<div class="max-w-screen-lg mx-auto">
    <div class="items-center mt-4">
        <h1 class="text-2xl font-bold flex items-center gap-1">Categories</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
            @forelse ($categories as $category)
                <div class="bg-white h-full p-3 overflow-hidden rounded-lg border border-slate-300">
                    <img class="rounded-lg w-full object-cover object-center md:h-36 lg:h-48"
                        src="{{ asset('/storage/' . $category->attachment) }}" alt="blog" />
                    <div class="py-1">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">
                            {{ $category->category }}
                        </h1>
                        <div class="flex flex-col space-y-1">
                            <p class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M6 3h8a1 1 0 0 1 1 1v5.022q.516.047 1 .185V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4.257a5.5 5.5 0 0 1-.657-1H6a1 1 0 0 1-1-1h4.207a5.5 5.5 0 0 1-.185-1H5V4a1 1 0 0 1 1-1m1 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm6 1v1H7V5zm6 9.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4.98-1.966a.45.45 0 0 0-.447-.037a.5.5 0 0 0-.155.108a.5.5 0 0 0-.145.357v3.075a.5.5 0 0 0 .145.358a.6.6 0 0 0 .157.11a.45.45 0 0 0 .323.02a.5.5 0 0 0 .13-.064l2.296-1.567a.47.47 0 0 0 .163-.185a.54.54 0 0 0-.003-.487a.5.5 0 0 0-.167-.182z" />
                                </svg>
                                <span>{{ count($category->courses) }} Courses</span>
                            </p>
                            <p class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32"
                                    viewBox="0 0 48 48">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $category->total_teachers ?? 0 }} Teachers</span>
                            </p>
                            <p class="flex justify-start items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 p-[3px] text-blue-500" width="32"
                                    height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1.637 1.637C.732 1.637 0 2.369 0 3.273v17.454c0 .904.732 1.636 1.637 1.636h20.726c.905 0 1.637-.732 1.637-1.636V3.273c0-.904-.732-1.636-1.637-1.636zm.545 2.181h19.636v16.364h-2.726v-1.09h-4.91v1.09h-12zM12 8.182a1.636 1.636 0 1 0 0 3.273a1.636 1.636 0 1 0 0-3.273m-4.363 1.91c-.678 0-1.229.55-1.229 1.226a1.228 1.228 0 0 0 2.455 0c0-.677-.549-1.226-1.226-1.226m8.726 0a1.227 1.227 0 1 0 0 2.453a1.227 1.227 0 0 0 0-2.453M12 12.545c-1.179 0-2.413.401-3.148 1.006a4.1 4.1 0 0 0-1.215-.188c-1.314 0-2.729.695-2.729 1.559v.896h14.184v-.896c0-.864-1.415-1.559-2.729-1.559c-.41 0-.83.068-1.215.188c-.735-.605-1.969-1.006-3.148-1.006" />
                                </svg>
                                <span>{{ $category->total_students ?? 0 }} Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="{{ route('category.id', $category->id) }}">
                                <button
                                    class="px-2 py-1 border-2 border-blue-500 rounded-lg bg-blue-500 text-white hover:border-transparent hover:bg-white hover:text-blue-500 transition duration-150">
                                    Detail
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div
                    class="col-span-12 flex flex-col justify-center items-center h-56 bg-white p-3 overflow-hidden rounded-lg border border-dashed border-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-500 h-6" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2" />
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="text-orange-500 text-sm">No Data</p>
                </div>
            @endforelse
        </div>

        <div class="flex justify-end gap-2 mt-3">
            @if ($categories->onFirstPage())
                <span
                    class="group border-2 border-transparent bg-gray-400 rounded-md px-2 flex items-center cursor-not-allowed">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                    </svg>
                </span>
            @else
                <a href="{{ $categories->previousPageUrl() }}"
                    class="group border-2 border-transparent bg-blue-500 rounded-md px-2 flex items-center hover:bg-white hover:border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white group-hover:text-blue-500" width="32"
                        height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                    </svg>
                </a>
            @endif

            @if ($categories->hasMorePages())
                <a href="{{ $categories->nextPageUrl() }}"
                    class="group border-2 border-transparent bg-blue-500 rounded-md px-2 flex items-center hover:bg-white hover:border-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white group-hover:text-blue-500" width="32"
                        height="32" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                    </svg>
                </a>
            @else
                <span
                    class="group border-2 border-transparent bg-gray-400 rounded-md px-2 flex items-center cursor-not-allowed">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                    </svg>
                </span>
            @endif
        </div>
    </div>

    <!-- courses -->
    <div class="mb-4">
        <div class="grid grid-cols-2 items-center py-4 mb-4">
            <h1 class="text-2xl font-bold flex items-center gap-1">
                <span>Popular Courses</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#ffee00] h-5 w-5" width="32" height="32"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m19.555 23.411l-6.664-3.285a1.261 1.261 0 0 0-1.202.045l.006-.003l-6.416 3.75a.61.61 0 0 1-.902-.626v.003l.994-7.542a1.248 1.248 0 0 0-.392-1.082l-.001-.001l-4.571-4.247a1.265 1.265 0 0 1 .648-2.17l.007-.001l5.987-1.108c.421-.078.765-.355.935-.727l.003-.008L10.478.746a1.272 1.272 0 0 1 2.271-.087l.003.007l2.881 5.471c.197.365.558.62.981.666h.006l6.045.681a1.265 1.265 0 0 1 .811 2.119l.001-.001l-4.27 4.562a1.251 1.251 0 0 0-.315 1.116l-.001-.008l1.52 7.453a.61.61 0 0 1-.86.683l.004.002z" />
                </svg>
            </h1>
            <div class="flex justify-end">
                <form id="searchForm"
                    class="relative flex w-full max-w-2xl items-center justify-between rounded-md border border-slate-300">
                    <svg class="absolute left-2 block h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" class=""></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                    </svg>
                    <input type="text" name="search" id="searchInput"
                        class="h-12 w-full rounded-md text-slate-500 py-4 pr-40 pl-12 outline-none focus:ring-2"
                        placeholder="Search Courses" />
                    <button type="submit"
                        class="absolute right-0 mr-1 inline-flex h-10 items-center justify-center rounded-lg bg-blue-500 px-10 font-medium text-white focus:ring-0">Search</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @forelse ($courses as $course)
                <div
                    class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48"
                        src="{{ '/storage/' . $course->thumbnail }}" alt="thumbnail" />
                    <h2
                        class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">
                        {{ $course->category ? $course->category->category : 'No Category' }}
                    </h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 min-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">
                            {{ $course->title }}
                        </h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32"
                                    viewBox="0 0 20 20">
                                    <path fill="currentColor"
                                        d="M6 3h8a1 1 0 0 1 1 1v5.022q.516.047 1 .185V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4.257a5.5 5.5 0 0 1-.657-1H6a1 1 0 0 1-1-1h4.207a5.5 5.5 0 0 1-.185-1H5V4a1 1 0 0 1 1-1m1 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm6 1v1H7V5zm6 9.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4.98-1.966a.45.45 0 0 0-.447-.037a.5.5 0 0 0-.155.108a.5.5 0 0 0-.145.357v3.075a.5.5 0 0 0 .145.358a.6.6 0 0 0 .157.11a.45.45 0 0 0 .323.02a.5.5 0 0 0 .13-.064l2.296-1.567a.47.47 0 0 0 .163-.185a.54.54 0 0 0-.003-.487a.5.5 0 0 0-.167-.182z" />
                                </svg>
                                <span>{{ count($course->sessions) }} Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32" height="32"
                                    viewBox="0 0 48 48">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $course->author->name }}</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 p-[3px] text-blue-500" width="32"
                                    height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1.637 1.637C.732 1.637 0 2.369 0 3.273v17.454c0 .904.732 1.636 1.637 1.636h20.726c.905 0 1.637-.732 1.637-1.636V3.273c0-.904-.732-1.636-1.637-1.636zm.545 2.181h19.636v16.364h-2.726v-1.09h-4.91v1.09h-12zM12 8.182a1.636 1.636 0 1 0 0 3.273a1.636 1.636 0 1 0 0-3.273m-4.363 1.91c-.678 0-1.229.55-1.229 1.226a1.228 1.228 0 0 0 2.455 0c0-.677-.549-1.226-1.226-1.226m8.726 0a1.227 1.227 0 1 0 0 2.453a1.227 1.227 0 0 0 0-2.453M12 12.545c-1.179 0-2.413.401-3.148 1.006a4.1 4.1 0 0 0-1.215-.188c-1.314 0-2.729.695-2.729 1.559v.896h14.184v-.896c0-.864-1.415-1.559-2.729-1.559c-.41 0-.83.068-1.215.188c-.735-.605-1.969-1.006-3.148-1.006" />
                                </svg>
                                <span>{{ $course->total_students ?? 0 }} Students</span>
                            </p>
                        </div>
                        <div class="text-right mt-3">
                            <a href="{{ route('course.id', $course->id) }}">
                                <button
                                    class="px-2 py-1 border-2 border-blue-500 rounded-lg bg-blue-500 text-white hover:border-transparent hover:bg-white hover:text-blue-500 transition duration-150">
                                    Mulai belajar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div
                    class="col-span-12 flex flex-col justify-center items-center h-56 bg-white p-3 overflow-hidden rounded-lg border border-dashed border-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-500 h-6" width="32" height="32"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 17.75a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75M12 7a1 1 0 1 1 0 2a1 1 0 0 1 0-2" />
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M1.25 12C1.25 6.063 6.063 1.25 12 1.25S22.75 6.063 22.75 12S17.937 22.75 12 22.75S1.25 17.937 1.25 12M12 2.75a9.25 9.25 0 1 0 0 18.5a9.25 9.25 0 0 0 0-18.5"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="text-orange-500 text-sm">No Data</p>
                </div>
            @endforelse
        </div>

        <div class="mt-10 flex justify-center">
            <a href="{{ route('course') }}"
                class="group inline-flex cursor-pointer rounded-full py-2 px-5 text-lg bg-blue-500 text-white hover:bg-white border border-transparent hover:border-blue-500">
                <span class="group-hover:text-blue-500">Lebih banyak</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:text-blue-500" width="32" height="32"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                </svg>
            </a>
        </div>
    </div>

    <div class="relative mx-auto w-full py-16 px-5 font-sans text-gray-800 sm:px-20 md:max-w-screen-lg lg:py-24">
        <h2 class="mb-5 text-center font-sans text-4xl sm:text-5xl font-bold">Frequently asked Questions</h2>
        <p class="mb-12 text-center text-lg text-gray-600">We have written down answers to some of the frequently asked
            questions. But, if you still have any queries, feel free to ping us on chat.</p>
        <ul class="space-y-4">
            <li class="text-left">
                <label for="accordion-1" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                    <input class="peer hidden" type="checkbox" id="accordion-1" checked />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                        <h3 class="text-sm text-gray-600 lg:text-base">Is there a free trial with Appsy?</h3>
                    </div>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                        <div class="p-5">
                            <p class="text-sm">Lorem ipsum, consectetur adipisicing elit. Adipisci eligendi, recusandae
                                voluptatum distinctio facilis necessitatibus aperiam ut? Dolor mollitia modi aliquam,
                                non
                                sint at reprehenderit commodi dignissimos quo unde asperiores officiis quos laboriosam
                                similique nihil.</p>
                        </div>
                    </div>
                </label>
            </li>

            <li class="text-left">
                <label for="accordion-2" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                    <input class="peer hidden" type="checkbox" id="accordion-2" />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                        <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit?</h3>
                    </div>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                        <div class="p-5">
                            <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit.
                                Adipisci
                                eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor
                                mollitia
                                modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis
                                quos laboriosam similique nihil.</p>
                        </div>
                    </div>
                </label>
            </li>

            <li class="text-left">
                <label for="accordion-3" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                    <input class="peer hidden" type="checkbox" id="accordion-3" />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                        <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet consectetur
                            adipisicing
                            elit. Distinctio.?</h3>
                    </div>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                        <div class="p-5">
                            <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit.
                                Adipisci
                                eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor
                                mollitia
                                modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis
                                quos laboriosam similique nihil.</p>
                        </div>
                    </div>
                </label>
            </li>

            <li class="text-left">
                <label for="accordion-4" class="relative flex flex-col rounded-md border border-gray-100 shadow-md">
                    <input class="peer hidden" type="checkbox" id="accordion-4" />
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute right-0 top-4 ml-auto mr-5 h-4 text-gray-500 transition peer-checked:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                    <div class="relative ml-4 cursor-pointer select-none items-center py-4 pr-12">
                        <h3 class="text-sm text-gray-600 lg:text-base">Lorem ipsum dolor sit amet.?</h3>
                    </div>
                    <div class="max-h-0 overflow-hidden transition-all duration-500 peer-checked:max-h-96">
                        <div class="p-5">
                            <p class="text-sm">Lorem ipsum, <b>dolor sit amet</b> consectetur adipisicing elit.
                                Adipisci
                                eligendi, recusandae voluptatum distinctio facilis necessitatibus aperiam ut? Dolor
                                mollitia
                                modi aliquam, non sint at reprehenderit commodi dignissimos quo unde asperiores officiis
                                quos laboriosam similique nihil.</p>
                        </div>
                    </div>
                </label>
            </li>
        </ul>
    </div>
</div>

<script>
    document.getElementById('searchForm').addEventListener('submit', function (event) {
        event.preventDefault();
        var searchParams = document.getElementById('searchInput').value;
        window.location.href = '/course?search=' + encodeURIComponent(searchParams);
    });
</script>
@endsection