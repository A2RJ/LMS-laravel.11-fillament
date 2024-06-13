@extends('components.layouts.home')

@section('content')
    <div class="max-w-screen-xl mx-auto pt-4">
        <div class="grid grid-cols-2 min-h-[30vh] bg-white rounded-lg shadow-sm bg-gradient-to-r from-cyan-500 to-blue-500">
            <div class="p-10 pl-20 pt-14">
                <a href="#" class="mb-3 block text-7xl font-bold text-white">{{ $category->category }}</a>
                <p class="mb-3 text-slate-200 text-sm">
                    You can learn about the culture of Sumbawa from anywhere and at any time, enjoying engaging and
                    interactive
                    materials designed to deepen your understanding of Sumbawan traditions and history.
                </p>
                <div class="flex flex-row space-x-4">
                    <p class="flex items-center gap-1 text-sm leading-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" width="32" height="32"
                            viewBox="0 0 20 20">
                            <path fill="currentColor"
                                d="M6 3h8a1 1 0 0 1 1 1v5.022q.516.047 1 .185V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4.257a5.5 5.5 0 0 1-.657-1H6a1 1 0 0 1-1-1h4.207a5.5 5.5 0 0 1-.185-1H5V4a1 1 0 0 1 1-1m1 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm6 1v1H7V5zm6 9.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4.98-1.966a.45.45 0 0 0-.447-.037a.5.5 0 0 0-.155.108a.5.5 0 0 0-.145.357v3.075a.5.5 0 0 0 .145.358a.6.6 0 0 0 .157.11a.45.45 0 0 0 .323.02a.5.5 0 0 0 .13-.064l2.296-1.567a.47.47 0 0 0 .163-.185a.54.54 0 0 0-.003-.487a.5.5 0 0 0-.167-.182z" />
                        </svg>
                        <span>{{ count($category->courses) }} Courses</span>
                    </p>
                    <p class="flex items-center gap-1 text-sm leading-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" width="32" height="32"
                            viewBox="0 0 48 48">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>{{ $category->total_teachers ?? 0 }} Teachers</span>
                    </p>
                    <p class="flex justify-start items-center gap-1 text-sm leading-none text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 p-[3px] text-white" width="32"
                            height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M1.637 1.637C.732 1.637 0 2.369 0 3.273v17.454c0 .904.732 1.636 1.637 1.636h20.726c.905 0 1.637-.732 1.637-1.636V3.273c0-.904-.732-1.636-1.637-1.636zm.545 2.181h19.636v16.364h-2.726v-1.09h-4.91v1.09h-12zM12 8.182a1.636 1.636 0 1 0 0 3.273a1.636 1.636 0 1 0 0-3.273m-4.363 1.91c-.678 0-1.229.55-1.229 1.226a1.228 1.228 0 0 0 2.455 0c0-.677-.549-1.226-1.226-1.226m8.726 0a1.227 1.227 0 1 0 0 2.453a1.227 1.227 0 0 0 0-2.453M12 12.545c-1.179 0-2.413.401-3.148 1.006a4.1 4.1 0 0 0-1.215-.188c-1.314 0-2.729.695-2.729 1.559v.896h14.184v-.896c0-.864-1.415-1.559-2.729-1.559c-.41 0-.83.068-1.215.188c-.735-.605-1.969-1.006-3.148-1.006" />
                        </svg>
                        <span>{{ $category->total_students ?? 0 }} Students</span>
                    </p>
                </div>
            </div>
            <div
                style="background-image: url('/dalam-loka.png'); 
           background-position-x: right; 
           background-position-y: 10px; 
           background-size: contain;
           background-repeat: no-repeat;">
            </div>
        </div>

        <!-- courses -->
        <div class="mb-4 min-h-screen">
            <div class="grid grid-cols-2 items-center py-4 mb-4">
                <h1 class="text-2xl font-bold">
                    <span>Popular Courses</span>
                </h1>
                <div class="flex justify-end">
                    <form class="relative flex w-full max-w-2xl items-center justify-between rounded-md" method="get"
                        action="{{ url()->current() }}">
                        @if (request('search', false))
                            <a href="{{ url()->current() }}" class="absolute flex justify-center items-center"
                                title="Cancel">
                                <svg class="absolute left-2 block h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m8.4 17l3.6-3.6l3.6 3.6l1.4-1.4l-3.6-3.6L17 8.4L15.6 7L12 10.6L8.4 7L7 8.4l3.6 3.6L7 15.6zm3.6 5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                                </svg>
                            </a>
                        @else
                            <svg class="absolute left-2 block h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" class=""></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                            </svg>
                        @endif
                        <input type="text" name="search" id="searchInput"
                            class="h-12 w-full rounded-md text-slate-500 py-4 pr-40 pl-12 outline-none focus:ring-0"
                            placeholder="Search Courses" value="{{ request('search') }}" autocomplete="off"
                            title="Insert keyword" />
                        <button type="submit" title="Search"
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
                            <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">
                                {{ $course->title }}
                            </h1>
                            <div class="flex flex-col space-y-1">
                                <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32"
                                        height="32" viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M6 3h8a1 1 0 0 1 1 1v5.022q.516.047 1 .185V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4.257a5.5 5.5 0 0 1-.657-1H6a1 1 0 0 1-1-1h4.207a5.5 5.5 0 0 1-.185-1H5V4a1 1 0 0 1 1-1m1 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm6 1v1H7V5zm6 9.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4.98-1.966a.45.45 0 0 0-.447-.037a.5.5 0 0 0-.155.108a.5.5 0 0 0-.145.357v3.075a.5.5 0 0 0 .145.358a.6.6 0 0 0 .157.11a.45.45 0 0 0 .323.02a.5.5 0 0 0 .13-.064l2.296-1.567a.47.47 0 0 0 .163-.185a.54.54 0 0 0-.003-.487a.5.5 0 0 0-.167-.182z" />
                                    </svg>
                                    <span>{{ count($course->sessions) }} Sessions</span>
                                </p>
                                <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32"
                                        height="32" viewBox="0 0 48 48">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>{{ $course->author->name }}</span>
                                </p>
                                <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 p-[3px] text-blue-500"
                                        width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M1.637 1.637C.732 1.637 0 2.369 0 3.273v17.454c0 .904.732 1.636 1.637 1.636h20.726c.905 0 1.637-.732 1.637-1.636V3.273c0-.904-.732-1.636-1.637-1.636zm.545 2.181h19.636v16.364h-2.726v-1.09h-4.91v1.09h-12zM12 8.182a1.636 1.636 0 1 0 0 3.273a1.636 1.636 0 1 0 0-3.273m-4.363 1.91c-.678 0-1.229.55-1.229 1.226a1.228 1.228 0 0 0 2.455 0c0-.677-.549-1.226-1.226-1.226m8.726 0a1.227 1.227 0 1 0 0 2.453a1.227 1.227 0 0 0 0-2.453M12 12.545c-1.179 0-2.413.401-3.148 1.006a4.1 4.1 0 0 0-1.215-.188c-1.314 0-2.729.695-2.729 1.559v.896h14.184v-.896c0-.864-1.415-1.559-2.729-1.559c-.41 0-.83.068-1.215.188c-.735-.605-1.969-1.006-3.148-1.006" />
                                    </svg>
                                    <span>{{ $course->total_students ?? 0 }} Students</span>
                                </p>
                                <div class="flex items-center gap-1 text-sm leading-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32"
                                        height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M2 12c0 5.523 4.477 10 10 10s10-4.477 10-10S17.523 2 12 2S2 6.477 2 12m18 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0m-8 0V6a5.98 5.98 0 0 1 4.243 1.757z" />
                                    </svg>
                                    <div class="w-full bg-slate-200 rounded-full dark:bg-slate-700">
                                        <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                            style="width: 10%"> 0%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mt-3">
                                <a href="{{ route('course.id', $course->id) }}">
                                    <button
                                        class="px-2 py-1 border-2 border-blue-500 rounded-lg bg-blue-500 text-white hover:bg-white hover:text-blue-500 transition duration-150">
                                        Mulai belajar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div
                        class="col-span-12 flex flex-col justify-center items-center h-56 bg-white p-3 overflow-hidden rounded-lg border border-dashed border-slate-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-500 h-6" width="32"
                            height="32" viewBox="0 0 24 24">
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

            <div class="mt-10 flex justify-end">
                {{ $courses->links() }}
            </div>
        </div>
    </div>
@endsection
