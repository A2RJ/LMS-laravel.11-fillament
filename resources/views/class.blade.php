@extends('components.layouts.home')

@section('content')
<!-- Breadcrumb -->
<nav class="max-w-screen-lg mx-auto flex py-3 text-slate-700 rounded-lg dark:bg-slate-800 dark:border-slate-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-slate-700 hover:text-blue-600 dark:text-slate-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-slate-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-slate-700 hover:text-blue-600 md:ms-2 dark:text-slate-400 dark:hover:text-white">Sakeco</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">Kelas sakeco untuk pemula</span>
            </div>
        </li>
    </ol>
</nav>

<div class="max-w-screen-lg mx-auto">
    <div class="flex justify-start items-center gap-2 mt-2 mb-4">
        <div>
            <a href="#" class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                    <path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                </svg>
            </a>
        </div>
        <div>
            <h1 class="text-2xl font-bold">Kelas sakeco untuk pemula</h1>
            <small class="text-sm font-medium text-slate-500">Lorem ipsum dolor sit amet consectetur.</small>
        </div>
    </div>

    <div class="rounded-lg border border-slate-300 bg-white py-2 px-3">
        <nav class="flex flex-wrap gap-4">
            <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-white bg-blue-500 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white"> Introduction </a>
            <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white"> Session 1 </a>
            <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white"> Session 2 </a>
            <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white"> Session 3 </a>
            <a href="#" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white"> Session 4 </a>
        </nav>
    </div>

    <div class="grid grid-cols-12">
        <div class="col-span-10 border-r border-dashed border-slate-300 pr-1">
            <article>
                <header class="mx-auto text-center">
                    <h1 class="mt-2 text-3xl font-bold text-slate-900 sm:text-5xl">Pendahuluan Kelas Sakeco</h1>
                    <p class="mt-6 text-lg text-slate-700">You're doing marketing the wrong way</p>
                    <div class="flex justify-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/IaTT-qg9YA4?si=nbjM_GSu8635FgKE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </header>

                <div class="mx-auto mt-10 space-y-12 px-4 py-10 font-serif text-lg tracking-wide text-slate-700">
                    <strong class="text-2xl font-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime impedit ex consequatur nostrum cupiditate at sequi? Ipsam commodi modi officia mollitia doloribus tenetur consectetur quae?</strong>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto enim maxime sit laudantium! Dolore atque, maxime iusto ut quas distinctio reiciendis animi voluptatibus soluta molestias, mollitia officiis laboriosam illum earum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus similique reiciendis et recusandae provident repellendus rem doloremque eaque error assumenda?</p>
                </div>
            </article>

            <div class="flex flex-col justify-center items-center w-full mx-auto h-64 bg-white border border-slate-300 border-dashed rounded-lg">
                <p class="mb-2 text-lg font-semibold text-slate-800">Pre Test Diperlukan</p>
                <p class="text-slate-600">Harap selesaikan pre test untuk menilai pemahaman awal Anda tentang materi.</p>
                <div clas="">
                    <div class="mt-4 group flex justify-between space-x-2 items-center bg-blue-500 p-2 rounded-md transition-colors duration-150 border border-white hover:border hover:border-blue-500 hover:bg-blue-100 hover:cursor-pointer">
                        <p class="text-white text-sm group-hover:text-blue-500 transition-colors duration-150">Pre Test</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white group-hover:text-blue-500 transition-colors duration-150" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex justify-between mx-auto mt-3 mb-6">
                <!-- Previous Button -->
                <button class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 mr-2 transition-colors duration-300 group-hover:text-blue-500">
                        <path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                    </svg>
                    <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Previous</span>
                    <div class="absolute inset-0 bg-white transform scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100"></div>
                </button>

                <!-- Next Button -->
                <button class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                    <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Next</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-blue-500">
                        <path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                    </svg>
                    <div class="absolute inset-0 bg-white transform scale-x-0 origin-right transition-transform duration-300 group-hover:scale-x-100"></div>
                </button>
            </div>
        </div>
        <div class="col-span-2 pl-1">
            <div class="p-2 border border-slate-300 rounded-lg space-y-2 bg-white w-full mt-2">
                <p class="text-slate-900 font-bold text-sm">Test list:</p>
                <a href="{{ route('test.id', 12) }}" class="group flex justify-between items-center border p-2 border-blue-500 rounded-md transition-colors duration-150 hover:bg-blue-500 hover:cursor-pointer">
                    <p class="text-blue-500 text-sm group-hover:text-white transition-colors duration-150">Pre Test</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 group-hover:text-white transition-colors duration-150" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 17q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17m-6 5q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h7V6q0-2.075 1.463-3.537T18 1q1.875 0 3.263 1.213T22.925 5.2q.05.325-.225.563T22 6t-.7-.175t-.4-.575q-.275-.95-1.062-1.6T18 3q-1.25 0-2.125.875T15 6v2h3q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22z" />
                    </svg>
                </a>

                <a href="{{ route('test.id', 12) }}" class="group flex justify-between items-center border p-2 border-blue-500 rounded-md transition-colors duration-150 hover:bg-blue-500 hover:cursor-pointer">
                    <p class="text-blue-500 text-sm group-hover:text-white transition-colors duration-150">Post Test</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 group-hover:text-white transition-colors duration-150" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection