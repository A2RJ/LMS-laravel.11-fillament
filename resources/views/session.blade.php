@extends('components.layouts.home')

@section('content')
<!-- Breadcrumb -->
<nav class="max-w-screen-lg mx-auto flex pl-4 py-3 text-slate-700 rounded-lg dark:bg-slate-800 dark:border-slate-700"
    aria-label="Breadcrumb">
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
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-slate-400 " aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <a href="#"
                    class="ms-1 text-sm font-medium text-slate-700 hover:text-blue-600 md:ms-2 dark:text-slate-400 dark:hover:text-white">
                    {{ $course->category ? $course->category->category : 'No Category' }}
                </a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-slate-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span
                    class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">{{ $course->title }}</span>
            </div>
        </li>
    </ol>
</nav>

<div class="max-w-screen-lg mx-auto bg-white border border-slate-300 rounded-lg grid grid-cols-12">
    <div class="col-span-9 border-r border-dashed border-slate-300 py-1 px-4">
        <div class="flex justify-start items-center gap-2 mt-2 mb-4">
            <div>
                <a href="{{ url()->previous() }}"
                    class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                        class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                        <path fill="currentColor"
                            d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                    </svg>
                </a>
            </div>
            <div>
                <h1 class="text-2xl font-bold">{{ $course->title }}</h1>
                <small class="text-sm font-medium text-slate-500">
                    {{ $sessions->first()['title'] }}
                </small>
            </div>
        </div>

        <div
            class="mb-4 border-b-2 pb-4 border-dashed border-transparent inline-flex space-x-4 overflow-x-scroll max-w-full">
            <a href="{{ route('course.id', $course->id) }}"
                class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-green-700 bg-green-50 border border-green-300 transition-all duration-200 ease-in-out hover:bg-green-500 hover:text-white ">
                Introduction
            </a>
            @foreach ($course->sessions as $index => $session)
                        @php
                            $isActiveSession = request('page') == $index + 1;
                            $hasAttendance = $session->attendance !== null;
                        @endphp
                        @if ($isActiveSession)
                            <a href="{{ route('course.id', ['course' => $course->id, 'session' => $session->id, 'current' => request('page')]) }}"
                                class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-white bg-blue-500 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white">
                                Session {{ $index + 1 }}
                            </a>
                        @elseif ($hasAttendance)
                            <a href="{{ route('course.id', ['course' => $course->id, 'session' => $session->id, 'current' => request('page')]) }}"
                                class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-green-700 bg-green-50 border border-green-300 transition-all duration-200 ease-in-out hover:bg-green-500 hover:text-white">
                                Session {{ $index + 1 }}
                            </a>
                        @else
                            <a href="{{ route('course.id', ['course' => $course->id, 'session' => $session->id, 'current' => request('page')]) }}"
                                class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-slate-600 bg-slate-100 border border-slate-300 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white">
                                Session {{ $index + 1 }}
                            </a>
                        @endif
            @endforeach
        </div>

        <div class="min-h-[50vh]">
            <x-tinyview :data="$data->content"></x-tinyview>
        </div>

        @if ($sessions->total() > 0)
            <div class="flex justify-between mx-auto mt-3 mb-6">
                <!-- Previous Page Link -->
                @if ($sessions->onFirstPage())
                    <a href="{{ route('course.id', ['course' => $course->id]) }}">
                        <button
                            class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                class="relative z-10 mr-2 transition-colors duration-300 group-hover:text-blue-500">
                                <path fill="currentColor"
                                    d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                            </svg>
                            <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Previous</span>
                            <div
                                class="absolute inset-0 bg-white transform scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100">
                            </div>
                        </button>
                    </a>
                @else
                    <a href="{{ $sessions->previousPageUrl() }}">
                        <button
                            class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                class="relative z-10 mr-2 transition-colors duration-300 group-hover:text-blue-500">
                                <path fill="currentColor"
                                    d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                            </svg>
                            <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Previous</span>
                            <div
                                class="absolute inset-0 bg-white transform scale-x-0 origin-left transition-transform duration-300 group-hover:scale-x-100">
                            </div>
                        </button>
                    </a>
                @endif

                <!-- Next Page Link -->
                @if ($sessions->hasMorePages())
                        @php
                            $disableLink = !$data->preTestDone || !$data->postTestDone || !$data->attendance;
                        @endphp
                        <a href="{{ $sessions->nextPageUrl() }}" @if ($disableLink) onclick="return false;" id="save" @endif>
                            <button
                                class="relative group flex items-center justify-center px-3 py-1 border border-blue-500 overflow-hidden rounded-lg bg-blue-500 text-white">
                                <span class="relative z-10 transition-colors duration-300 group-hover:text-blue-500">Next</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-blue-500">
                                    <path fill="currentColor"
                                        d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L19.3 11.3q.15.15.213.325t.062.375t-.062.375t-.213.325l-4.575 4.575q-.3.3-.712.288t-.713-.313q-.275-.3-.288-.7t.288-.7z" />
                                </svg>
                                <div
                                    class="absolute inset-0 bg-white transform scale-x-0 origin-right transition-transform duration-300 group-hover:scale-x-100">
                                </div>
                            </button>
                        </a>
                @else
                    <button
                        class="relative group flex items-center justify-center px-3 py-1 border border-gray-500 overflow-hidden rounded-lg bg-gray-500 text-white cursor-not-allowed"
                        disabled>
                        <span class="relative z-10 transition-colors duration-300 group-hover:text-gray-500">Next</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            class="relative z-10 ml-2 transition-colors duration-300 group-hover:text-gray-500">
                            <path fill="currentColor"
                                d="M16.15 13H5q-.425 0-.712-.288T4 12t.288-.712T5 11h11.15L13.3 8.15q-.3-.3-.288-.7t.288-.7q-.3-.3-.713-.312t-.712.287L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q-.3-.3-.713-.287t-.712.312q-.275.3-.288.7t.288.7z" />
                        </svg>
                        <div
                            class="absolute inset-0 bg-white transform scale-x-0 origin-right transition-transform duration-300 group-hover:scale-x-100">
                        </div>
                    </button>
                @endif
            </div>
        @endif
    </div>

    <div class="col-span-3 pl-1">
        <div
            class="sticky top-[70px] max-h-screen overflow-y-scroll p-2 pb-24 border border-transparent rounded-lg space-y-2 bg-white w-full mt-2">
            @if (session('failed'))
                <div role="alert" class="mb-4 rounded border-s-4 border-red-500 bg-red-50 p-4">
                    <div class="flex items-center gap-2 text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd" />
                        </svg>

                        <strong class="block font-medium"> Ops! </strong>
                    </div>

                    <p class="mt-2 text-sm text-red-700">
                        {{ session('failed') }}.
                    </p>
                </div>
            @endif

            @if ($data->attendance)
                <div role="alert" class="mb-4 rounded border-s-4 border-green-500 bg-green-50 p-4">
                    <div class="flex items-center gap-2 text-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12 17q.425 0 .713-.288T13 16v-4q0-.425-.288-.712T12 11t-.712.288T11 12v4q0 .425.288.713T12 17m0-8q.425 0 .713-.288T13 8t-.288-.712T12 7t-.712.288T11 8t.288.713T12 9m0 13q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                        </svg>

                        <strong class="block font-medium"> Info: </strong>
                    </div>

                    <p class="mt-2 text-sm text-green-700">
                        You have marked your attendance for this session.
                    </p>
                </div>
            @else
                <div role="alert" class="mb-4 rounded border-s-4 border-red-500 bg-red-50 p-4">
                    <div class="flex items-center gap-2 text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd" />
                        </svg>

                        <strong class="block font-medium"> Attendance Required </strong>
                    </div>

                    <p class="mt-2 text-sm text-red-700">
                        Please note that you have not marked your attendance.
                    </p>

                    <form action="{{ route('sessions.attendance', ['course' => $course->id, 'session' => $data->id]) }}"
                        method="POST">
                        @csrf
                        <button type="submit"
                            class="flex justify-between items-center space-x-2 mt-4 text-blue-700 border border-blue-300 rounded-lg bg-green-50 font-medium text-sm py-2 px-4">
                            <span>Mark Attendance</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        </button>
                    </form>
                </div>
            @endif

            <div class="text-base font-bold text-slate-900 dark:text-white">Course Session</div>
            <ol class="space-y-2">
                <li class="">
                    <a href="{{ route('course.id', ['course' => $course->id]) }}">
                        <div
                            class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400">
                            <div class="flex items-center justify-between">
                                <h3 class="font-medium text-sm">1. Introduction</h3>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 16 12">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </li>
                @foreach ($session_list as $index => $session)
                    @if (request('page') == $index + 1)
                        <li>
                            <div class="w-full p-3 text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">{{ $index + 2 }}.
                                        {{ substr($session->title, 0, 25) }}...
                                    </h3>
                                    <h3 class="font-medium text-sm">Now</h3>
                                </div>
                            </div>
                        </li>
                    @elseif ($session->attendance)
                        <li class="">
                            <a href="{{ route('session.id', ['course' => $course->id, 'page' => $index + 1]) }}">
                                <div
                                    class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400">
                                    <div class="flex items-center justify-between line-clamp-1">
                                        <h3 class="font-medium text-sm">{{ $index + 2 }}.
                                            {{ substr($session->title, 0, 25) }}...
                                        </h3>
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 16 12">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @else
                        <li>
                            <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">{{ $index + 2 }}.
                                        {{ substr($session->title, 0, 25) }}...
                                    </h3>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 text-slate-800 group-hover:text-white transition-colors duration-150"
                                        width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                                    </svg>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ol>

            @if ($data)
                @if (!empty($data->preTest) || !empty($data->postTest))
                    <p class="text-base font-bold text-slate-900 dark:text-white">Test list:</p>

                    @if ($data->preTest && $data->preTestDone)
                        <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                            role="alert">
                            <a href="{{ route('test.result', ['result' => $data->preTestNumber]) }}">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">Pre Test</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="w-full p-3 text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                            role="alert">
                            <a href="{{ route('test.id', [$course->id, $data['id']]) }}?test=pre">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">Pre Test</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-blue-800 group-hover:text-white transition-colors duration-150"
                                        width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12.2 13l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13zm-.2 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @endif

                    @if ($data->postTest && $data->postTestDone)
                        <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                            role="alert">
                            <a href="{{ route('test.result', ['result' => $data->postTestNumber]) }}">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">Post Test</h3>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @elseif ($data->preTest && $data->preTestDone)
                        <div class="w-full p-3 text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400"
                            role="alert">
                            <a href="{{ route('test.id', [$course->id, $data['id']]) }}?test=post">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">Post Test</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-blue-800 group-hover:text-white transition-colors duration-150"
                                        width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m12.2 13l-.9.9q-.275.275-.275.7t.275.7t.7.275t.7-.275l2.6-2.6q.3-.3.3-.7t-.3-.7l-2.6-2.6q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l.9.9H9q-.425 0-.712.288T8 12t.288.713T9 13zm-.2 9q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400"
                            role="alert">
                            <a href="{{ route('test.id', [$course->id, $data['id']]) }}?test=post">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-sm">Post Test</h3>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 text-slate-800 group-hover:text-white transition-colors duration-150"
                                        width="32" height="32" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
            @endif
            <!-- <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400"
                role="alert">
                <a href="{{ route('test.id', [$course->id, $data['id']]) }}?test=post">
                    <div class="flex items-center justify-between">
                        <h3 class="font-medium text-sm">Post Test</h3>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-slate-800 group-hover:text-white transition-colors duration-150"
                            width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm6-5q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6z" />
                        </svg>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</div>

<div class="relative z-10 hidden" id="modal-save" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-blur-md"></div>
    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Ops!</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    You must
                                    <span class="font-bold">mark attendance</span>
                                    or complete the
                                    <span class="font-bold"> pre-test</span>
                                    and
                                    <span class="font-bold">post-test</span>
                                    before proceeding to the next session.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button"
                        class="mt-3 border border-transparent inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-white hover:text-black hover:border sm:mt-0 sm:w-auto"
                        id="cancel-save">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const modalSave = document.getElementById('modal-save');
    const save = document.getElementById('save');
    const cancelSave = document.getElementById('cancel-save');

    const openModalSave = () => {
        modalSave.classList.remove('hidden');
        modalSave.classList.add('flex');
    };

    save.addEventListener('click', openModalSave);
    const cancelModalSave = () => {
        modalSave.classList.add('hidden');
        modalSave.classList.remove('flex');
    };
    cancelSave.addEventListener('click', cancelModalSave);
</script>
@endsection