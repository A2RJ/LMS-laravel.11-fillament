@extends('components.layouts.home')

@section('content')
<div class="max-w-screen-xl mx-auto pt-4">
    <nav aria-label="Breadcrumb" class="p-4">
        <ol class="flex items-center gap-1 text-sm text-slate-600">
            <li>
                <a href="/" class="block transition hover:text-slate-700">
                    <span class="sr-only"> Home </span>

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
            </li>

            <li class="rtl:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </li>

            <li>
                <a href="{{ route('category.id', $course->category->id) }}" class="block transition hover:text-slate-700">
                    {{ $course->category ? $course->category->category : 'No Category' }} </a>
            </li>

            <li class="rtl:rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </li>

            <li>
                <a href="#" class="block transition hover:text-slate-700"> {{ $course->title }} </a>
            </li>
        </ol>
    </nav>

    <div class="max-w-screen-md lg:max-w-screen-xl mx-auto bg-white border border-slate-300 rounded-lg grid grid-cols-12">
        <div class="col-span-9 border-r border-dashed border-slate-300 py-1 px-4">
            <div class="flex justify-start items-center gap-2 mt-2 mb-4">
                <div>
                    <a href="{{ url()->previous() }}" class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                            <path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">{{ $course->title }}</h1>
                    <small class="text-sm font-medium text-slate-500">
                        Introduction
                    </small>
                </div>
            </div>

            <div class="grid grid-cols-1 mb-4 lg:grid-cols-4 font-normal text-slate-600 text-xs lg:text-sm">
                <div class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2 lg:rounded-l-lg">
                    <svg class="text-blue-500 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                    </svg>
                    <b>{{ $course->category?->category }}</b>
                    <p>Category</p>
                </div>
                <div class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2">
                    <svg class="text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                    </svg>
                    <b>4,9</b>
                    <p>(1 Reviews)</p>
                </div>
                <div class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2">
                    <svg class="text-blue-500 bg-blue-200 rounded-full w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                    </svg>
                    <b>{{ $course->sessions->count() + 1 }}</b>
                    <p> Lessons</p>
                </div>
                <div class="flex justify-center items-center gap-1 border border-slate-300 p-2 lg:rounded-r-lg">
                    <svg class="text-slate-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                    <b>{{ $totalTest ?? 0 }}</b>
                    <p> Quizzes</p>
                </div>
            </div>

            <div class="border-b-2 pb-4 border-dashed border-transparent inline-flex space-x-4 overflow-x-scroll max-w-full">
                <a href="{{ route('course.id', $course->id) }}" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-white bg-blue-500 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white">
                    Introduction </a>
                @foreach ($course->sessions as $index => $session)
                <a href="{{ route('session.id', ['course' => $course->id, 'session' => $session->id]) }}" class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-slate-600 transition-all duration-200 ease-in-out border border-slate-300 hover:bg-blue-500 hover:text-white">
                    Session {{ $index + 1 }} </a>
                @endforeach
            </div>

            <div class="min-h-[50vh]">
                <x-tinyview :data="$course->content"></x-tinyview>
            </div>

            <div class="float-right mt-8 mb-4">
                <a href="{{ route('session.id', ['course' => $course->id]) }}?page=1">
                    <button class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-blue-500">
                            <path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                        </svg>
                        <div class="absolute inset-0 bg-white transform scale-x-0 origin-right transition-transform duration-300 group-hover:scale-x-100">
                        </div>
                    </button>
                </a>
            </div>
        </div>

        <div class="col-span-3 pl-1">
            <div class="sticky top-[70px] max-h-screen overflow-y-scroll p-2 pb-24 border border-transparent rounded-lg space-y-2 bg-white w-full mt-2">
                @if (session('failed'))
                <div role="alert" class="mb-4 rounded border-s-4 border-red-500 bg-red-50 p-4">
                    <div class="flex items-center gap-2 text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                        </svg>

                        <strong class="block font-medium"> Ops! </strong>
                    </div>

                    <p class="mt-2 text-sm text-red-700">
                        {{ session('failed') }}.
                    </p>
                </div>
                @endif

                @if (session('success'))
                <div role="alert" class="mb-4 rounded border-s-4 border-green-500 bg-green-50 p-4">
                    <div class="flex items-center gap-2 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                        </svg>
                        <strong class="block font-medium"> Explore course now </strong>
                    </div>

                    <p class="mt-2 text-sm text-green-700">
                        Congratulations on joining the course!
                    </p>
                </div>
                @endif

                @if ($exists)
                <div role="alert" class="mb-4 rounded border-s-4 border-blue-500 bg-blue-50 p-4">
                    <div class="flex items-center gap-2 text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                        </svg>

                        <strong class="block font-medium"> Info: </strong>
                    </div>

                    <p class="mt-2 text-sm text-blue-700">
                        Complete your course to unlock and download your certificate!
                    </p>

                    <div class="bg-blue-300 rounded-full mt-4 transition duration-300">
                        <span id="ProgressLabel" class="sr-only">Loading</span>

                        <span role="progressbar" aria-labelledby="ProgressLabel" aria-valuenow="{{ $progressPercentage }}" class="block rounded-full bg-gray-200">
                            <span class="block h-5 rounded-full bg-blue-600 text-center text-[10px]/4" {!! $progressPercentageStyle !!}>
                                <span class="font-bold text-white pl-1"> {{ $progressPercentage }}% </span>
                            </span>
                        </span>
                    </div>

                    @if ($progressPercentage == 100)
                    <a href="#" class="flex justify-center items-center gap-2 bg-blue-700 rounded-lg mt-2 shadow-sm text-sm text-white font-semibold py-2 px-4 transition-all duration-500 hover:bg-blue-500">
                        Download Certificate
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" width="32" height="32" viewBox="0 0 24 24">
                            <g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="M3 14.25a.75.75 0 0 1 .75.75c0 1.435.002 2.436.103 3.192c.099.734.28 1.122.556 1.399c.277.277.665.457 1.4.556c.754.101 1.756.103 3.191.103h6c1.435 0 2.436-.002 3.192-.103c.734-.099 1.122-.28 1.399-.556c.277-.277.457-.665.556-1.4c.101-.755.103-1.756.103-3.191a.75.75 0 0 1 1.5 0v.055c0 1.367 0 2.47-.116 3.337c-.122.9-.38 1.658-.982 2.26c-.602.602-1.36.86-2.26.982c-.867.116-1.97.116-3.337.116h-6.11c-1.367 0-2.47 0-3.337-.116c-.9-.122-1.658-.38-2.26-.982c-.602-.602-.86-1.36-.981-2.26c-.117-.867-.117-1.97-.117-3.337V15a.75.75 0 0 1 .75-.75" opacity=".5" />
                                <path d="M12 16.75a.75.75 0 0 0 .553-.244l4-4.375a.75.75 0 1 0-1.107-1.012l-2.696 2.95V3a.75.75 0 0 0-1.5 0v11.068l-2.696-2.95a.75.75 0 0 0-1.108 1.013l4 4.375a.75.75 0 0 0 .554.244" />
                            </g>
                        </svg>
                    </a>
                    @endif

                    <div class="mt-2">
                        <a href="#" class="text-blue-500 underline ">
                            <small>Lihat semua sertifkat saya</small>
                        </a>
                    </div>
                </div>
                @else
                <div class="p-4 py-8 mb-4 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-500 flex flex-col items-center justify-between space-y-4">
                    <div class="block text-center mb-5 lg:text-left lg:mb-0">
                        <h2 class="font-manrope text-xl text-white font-semibold mb-5 lg:mb-2">
                            Kickstart Your Learning!
                        </h2>
                        <p class="text-sm text-indigo-100">
                            Commit and track your progress.
                        </p>
                    </div>
                    <a href="{{ route('join.course', ['course' => $course->id]) }}" class="flex items-center gap-2 bg-white rounded-full shadow-sm text-base text-blue-500 font-semibold py-1 px-4 transition-all duration-500 hover:bg-transparent hover:text-white border-2 border-transparent hover:border-white group">
                        Join Now
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 ml-2 transition-colors duration-150 group-hover:text-white">
                            <path fill="currentColor" d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                        </svg>
                    </a>
                </div>
                @endif

                <div class="text-base font-bold text-slate-900 dark:text-white">Course Session</div>
                <ol class="space-y-2">
                    <li class="">
                        <a href="{{ route('course.id', ['course' => $course->id]) }}">
                            <div class="w-full p-3 text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">1. Introduction</h3>
                                    <h3 class="font-medium text-sm">Now</h3>
                                </div>
                            </div>
                        </a>
                    </li>
                    @foreach ($session_list as $index => $session)
                    @if ($session->attendance)
                    <li class="">
                        <a href="{{ route('session.id', ['course' => $course->id, 'page' => $index + 1]) }}">
                            <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400">
                                <div class="flex items-center justify-between line-clamp-1">
                                    <h3 class="font-medium text-sm">{{ $index + 2 }}. {{ substr($session->title, 0, 25) }}...</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </li>
                    @else
                    <li>
                        <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400" role="alert">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-sm">{{ $index + 2 }}. {{ substr($session->title, 0, 25) }}...</h3>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-800 group-hover:text-white transition-colors duration-150" width="32" height="32" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                                </svg>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ol>

                @if (!empty($course->session) && !empty($course->session->preTest) && !empty($course->session->postTest))
                <p class="text-base font-bold text-slate-900 dark:text-white">Test list:</p>

                @if (!empty($course->session->preTest))
                <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400" role="alert">
                    <a href="{{ route('test.id', [$course->id, $course->session->preTest->id]) }}">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-sm">Pre Test</h3>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        </div>
                    </a>
                </div>
                @endif

                @if (!empty($course->session->postTest))
                <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400" role="alert">
                    <a href="{{ route('test.id', [$course->id, $course->session->postTest->id]) }}">
                        <div class="flex items-center justify-between">
                            <h3 class="font-medium text-sm">Post Test</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-800 group-hover:text-white transition-colors duration-150" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                            </svg>
                        </div>
                    </a>
                </div>
                @endif
                @endif

            </div>
        </div>
    </div>
</div>
@endsection