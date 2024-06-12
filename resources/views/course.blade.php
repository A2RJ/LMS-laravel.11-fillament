@extends('components.layouts.home')

@section('content')
    <!-- Breadcrumb -->
    <nav class="flex mt-4 py-3 text-slate-700 rounded-lg dark:bg-slate-800 dark:border-slate-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-slate-700 hover:text-blue-600 dark:text-slate-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-slate-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">Course List</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mb-10">
        <div class="grid grid-cols-2 items-center py-2 mb-2">
            <h1 class="text-2xl font-bold flex items-center gap-1">
                <span>Course List</span>
            </h1>
            <div class="flex justify-end">
                <form
                    class="relative flex w-full max-w-2xl items-center justify-between rounded-md border border-slate-300">
                    <svg class="absolute left-2 block h-5 w-5 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" class=""></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
                    </svg>
                    <input type="name" name="search"
                        class="h-12 w-full rounded-md text-slate-500 py-4 pr-40 pl-12 outline-none focus:ring-2"
                        placeholder="Search Courses" />
                    <button type="submit"
                        class="absolute right-0 mr-1 inline-flex h-10  items-center justify-center rounded-lg bg-blue-500 px-10 font-medium text-white focus:ring-0">Search</button>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @forelse ($classes as $class)
                <div
                    class="bg-white group hover:shadow-lg transition duration-150 h-full overflow-hidden rounded-lg border border-slate-300">
                    <img class="w-full transform object-cover object-center transition duration-500 ease-in-out group-hover:scale-105 md:h-36 lg:h-48"
                        src="{{ '/storage/' . $class->thumbnail }}" alt="thumbnail" />
                    <h2
                        class="title-font inline-block cursor-pointer px-6 pt-4 pb-1 text-xs font-semibold uppercase tracking-widest text-[#43c2e5] hover:font-bold">
                        {{ $class->category ? $class->category->category : 'No Category' }}
                    </h2>
                    <div class="py-1 px-6 pb-6">
                        <h1 class="line-clamp-2 max-h-[3.50rem] font-bold text-lg text-gray-800 overflow-hidden mb-3">
                            {{ $class->title }}
                        </h1>
                        <div class="flex flex-col space-y-1">
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" width="32"
                                    height="32" viewBox="0 0 48 48">
                                    <path fill="currentColor"
                                        d="M12.25 8A4.25 4.25 0 0 0 8 12.25v15.5A4.25 4.25 0 0 0 12.25 32h19.851a7 7 0 0 1-1.641-2.5H12.25a1.75 1.75 0 0 1-1.75-1.75v-15.5c0-.966.784-1.75 1.75-1.75h23.5c.967 0 1.75.784 1.75 1.75v7.768c.89.062 1.733.291 2.5.656V12.25A4.25 4.25 0 0 0 35.75 8zm-7 27.5h20.978A5 5 0 0 0 26 36.998v.502q0 .252.016.5H5.25a1.25 1.25 0 1 1 0-2.5M42 27a5 5 0 1 1-10 0a5 5 0 0 1 10 0m4 10.5c0 3.5-3.15 6.5-9 6.5s-9-3-9-6.5v-.502A3 3 0 0 1 31 34h12c1.657 0 3 1.34 3 2.998z" />
                                </svg>
                                <span>{{ count($class->sessions) }} Sessions</span>
                            </p>
                            <p class="inline-flex items-center gap-1 text-sm leading-none text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500" width="32"
                                    height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 11q.825 0 1.413-.588Q14 9.825 14 9t-.587-1.413Q12.825 7 12 7q-.825 0-1.412.587Q10 8.175 10 9q0 .825.588 1.412Q11.175 11 12 11Zm0 2q-1.65 0-2.825-1.175Q8 10.65 8 9q0-1.65 1.175-2.825Q10.35 5 12 5q1.65 0 2.825 1.175Q16 7.35 16 9q0 1.65-1.175 2.825Q13.65 13 12 13Zm0 11q-2.475 0-4.662-.938q-2.188-.937-3.825-2.574Q1.875 18.85.938 16.663Q0 14.475 0 12t.938-4.663q.937-2.187 2.575-3.825Q5.15 1.875 7.338.938Q9.525 0 12 0t4.663.938q2.187.937 3.825 2.574q1.637 1.638 2.574 3.825Q24 9.525 24 12t-.938 4.663q-.937 2.187-2.574 3.825q-1.638 1.637-3.825 2.574Q14.475 24 12 24Zm0-2q1.8 0 3.375-.575T18.25 19.8q-.825-.925-2.425-1.612q-1.6-.688-3.825-.688t-3.825.688q-1.6.687-2.425 1.612q1.3 1.05 2.875 1.625T12 22Zm-7.7-3.6q1.2-1.3 3.225-2.1q2.025-.8 4.475-.8q2.45 0 4.463.8q2.012.8 3.212 2.1q1.1-1.325 1.713-2.95Q22 13.825 22 12q0-2.075-.788-3.887q-.787-1.813-2.15-3.175q-1.362-1.363-3.175-2.151Q14.075 2 12 2q-2.05 0-3.875.787q-1.825.788-3.187 2.151Q3.575 6.3 2.788 8.113Q2 9.925 2 12q0 1.825.6 3.463q.6 1.637 1.7 2.937Z" />
                                </svg>
                                <span>{{ $class->user->name }}</span>
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
                            <a href="{{ route('class.id', $class->id) }}">
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

        <nav class="text-right mt-4 min-h-svh">
            {{ $classes->links() }}
        </nav>

    </div>
@endsection
