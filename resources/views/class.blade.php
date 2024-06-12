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
                    {{ $class->category ? $class->category->category : 'No Category' }}
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
                    class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">{{ $class->title }}</span>
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
                <h1 class="text-2xl font-bold">{{ $class->title }}</h1>
                <small class="text-sm font-medium text-slate-500">
                    Introduction
                </small>
            </div>
        </div>

        <div
            class="border-b-2 pb-4 border-dashed border-transparent inline-flex space-x-4 overflow-x-scroll max-w-full">
            <a href="{{ route('class.id', $class->id) }}"
                class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-white bg-blue-500 transition-all duration-200 ease-in-out hover:bg-blue-500 hover:text-white">
                Introduction </a>
            @foreach ($class->sessions as $index => $session)
                <a href="{{ route('session.id', ['class' => $class->id, 'session' => $session->id]) }}"
                    class="whitespace-nowrap inline-flex rounded-lg py-2 px-3 text-sm font-medium text-slate-600 transition-all duration-200 ease-in-out border border-slate-300 hover:bg-blue-500 hover:text-white">
                    Session {{ $index + 1 }} </a>
            @endforeach
        </div>

        <div class="grid grid-cols-1 mb-4 lg:grid-cols-4 font-normal text-slate-600 text-xs lg:text-sm">
            <div
                class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2 lg:rounded-l-lg">
                <svg class="text-blue-500 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                </svg>
                <b>{{ $class->category?->category }}</b>
            </div>
            <div class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2">
                <svg class="text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                </svg>
                <b>4,9</b>
                <p>(1 Reviews)</p>
            </div>
            <div class="flex justify-center items-center gap-1 border border-slate-300 lg:border-r-0 p-2">
                <svg class="text-blue-500 bg-blue-200 rounded-full w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                </svg>
                <b>{{ $class->sessions->count() + 1 }}</b>
                <p> Lessons</p>
            </div>
            <div class="flex justify-center items-center gap-1 border border-slate-300 p-2 lg:rounded-r-lg">
                <svg class="text-slate-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
                <b>24</b>
                <p> Quizzes</p>
            </div>
        </div>

        <div class="min-h-[50vh]">
            <x-tinyview :data="$class->content"></x-tinyview>
        </div>

        <div class="float-right mt-8 mb-4">
            <a href="{{ route('session.id', ['class' => $class->id]) }}?page=1">
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
        </div>
    </div>


    <div class="col-span-3 pl-1">
        <div
            class="sticky top-[70px] max-h-screen overflow-y-scroll p-2 pb-24 border border-transparent rounded-lg space-y-2 bg-white w-full mt-2">
            <div class="text-base font-bold text-slate-900 dark:text-white">Course Session</div>
            <ol class="space-y-2">
                <li class="">
                    <a href="{{ route('class.id', ['class' => $class->id]) }}">
                        <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                            role="alert">
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
                @foreach ($class->sessions as $index => $session)
                    <li class="">
                        <a href="{{ route('session.id', ['class' => $class->id, 'page' => $index + 1]) }}">
                            <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                                role="alert">
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
                @endforeach
            </ol>

            @if(!empty($class->session) && !empty($class->session->preTest) && !empty($class->session->postTest))
                <p class="text-base font-bold text-slate-900 dark:text-white">Test list:</p>

                @if (!empty($class->session->preTest))
                    <div class="w-full p-3 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400"
                        role="alert">
                        <a href="{{ route('test.id', [$class->id, $class->session->preTest->id]) }}">
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
                @endif

                @if (!empty($class->session->postTest))
                    <div class="w-full p-3 text-slate-800 bg-slate-100 border border-slate-300 rounded-lg dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400"
                        role="alert">
                        <a href="{{ route('test.id', [$class->id, $class->session->postTest->id]) }}">
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

        </div>
    </div>
</div>
@endsection