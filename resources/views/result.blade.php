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
                    {{ isset($class->preTest) ? 'Pre Test' : 'Post Test' }}
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
                    class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">{{ $class->session->title }}</span>
            </div>
        </li>
    </ol>
</nav>

<div class="p-4 max-w-screen-lg mx-auto bg-white border border-slate-300 rounded-lg grid grid-cols-1 gap-4">
    <div class="flex justify-start items-center gap-2 mt-2">
        <div>
            <a href="{{ route('session.id', $class->course_id) }}?page={{ $class->session_id }}"
                class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                    class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                    <path fill="currentColor"
                        d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                </svg>
            </a>
        </div>
        <div>
            <h1 class="text-2xl font-bold">{{ $class->course->title }}</h1>
            <small class="text-sm font-medium text-slate-500">
                {{ $class->session->title }}
            </small>
        </div>
    </div>

    <div class="mb-4">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 text-white">
            <div class="rounded-lg lg:col-span-2 bg-cyan-500"
                style="background-image: url('/circle-dot3-2.png');  background-repeat: no-repeat; background-position: right; background-size: contain; ">
                <div class="flow-root rounded-lg py-3 shadow-sm">
                    <dl class="-my-3 text-sm">
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Name</dt>
                            <dd class=" sm:col-span-2">{{ $class->user->name }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Email</dt>
                            <dd class=" sm:col-span-2">{{ $class->user->email }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Class Name</dt>
                            <dd class=" sm:col-span-2">{{ $class->course->title }}
                                ({{ $class->session->title }})</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Status</dt>
                            <dd class=" sm:col-span-2">
                                @php
                                    $checkReview = collect($tests)->filter(fn($test) => $test->is_checked == FALSE)->count();
                                    $className = $checkReview == 0 ? "bg-green-300 text-green-800" : "bg-orange-300 text-orange-800"
                                @endphp
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $className }} ">
                                    {{ $checkReview == 0 ? 'Your test has been reviewed' : 'We are currently reviewing your test' }}
                                </span>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="rounded-lg  bg-cyan-500"
                style="background-image: url('/circle-dot3-1.png'); background-repeat: no-repeat; background-position: left; background-size: contain;">
                <div class="flow-root rounded-lg py-3 shadow-sm">
                    <dl class="-my-3 text-sm">
                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Test</dt>
                            <dd class=" sm:col-span-2">
                                {{ isset($class->preTest) ? 'Pre Test' : 'Post Test' }}
                            </dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Test Date</dt>
                            <dd class=" sm:col-span-2">{{ $class->created_at }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Questions</dt>
                            <dd class=" sm:col-span-2">{{ count($tests) }}</dd>
                        </div>

                        <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                            <dt class="font-medium ">Score</dt>
                            <dd class=" sm:col-span-2">{{ $answered_correctly }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-2">
        <p class="text-xl font-bold mb-2">Question List</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </div>

    <div class="lg:pr-32 lg:pl-4 grid grid-cols-1 gap-8 pb-16">
        @foreach ($tests as $index => $test)
            <div class="" data-index="{{ $index }}">
                <div class="flex space-x-4">
                    <h4 class="font-medium">{{ $index + 1 }}.</h4>
                    <h4 class="font-medium">{!! $test->question->question !!}</h4>
                </div>
                <div class="ml-8">
                    @if ($test->question->answer_type == 'selected')
                        @foreach ($test->question->answers as $option)
                            <label class="flex justify-start items-start space-x-2 space-y-4">
                                @if ($test->answered->id == $option->id)
                                    @if ($option->is_true)
                                        <svg class="w-6 h-6 mt-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                            height="100" viewBox="0 0 48 48">
                                            <path fill="#c8e6c9"
                                                d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z">
                                            </path>
                                            <path fill="#4caf50"
                                                d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z">
                                            </path>
                                        </svg>
                                    @else
                                        <svg class="w-6 h-6 mt-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                            height="100" viewBox="0 0 48 48">
                                            <path fill="#f44336"
                                                d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z">
                                            </path>
                                            <path fill="#fff" d="M29.656,15.516l2.828,2.828l-14.14,14.14l-2.828-2.828L29.656,15.516z">
                                            </path>
                                            <path fill="#fff" d="M32.484,29.656l-2.828,2.828l-14.14-14.14l2.828-2.828L32.484,29.656z">
                                            </path>
                                        </svg>
                                    @endif
                                @else
                                    @if ($option->is_true)
                                        <svg class="w-6 h-6 mt-4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100"
                                            height="100" viewBox="0 0 48 48">
                                            <path fill="#c8e6c9"
                                                d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z">
                                            </path>
                                            <path fill="#4caf50"
                                                d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z">
                                            </path>
                                        </svg>
                                    @else
                                        <input type="radio" name="" value=""
                                            class="form-radio lg:h-5 lg:w-5 checked:bg-slate-500 text-slate-500 p-1 mt-5" disabled>
                                    @endif
                                @endif
                                <div class="text-justify">
                                    <x-tinyview :data="$option->answer"></x-tinyview>
                                </div>
                            </label>
                        @endforeach
                    @else
                        <div class="border border-slate-300 rounded p-2 mt-2">
                            <div class="flex justify-between items-center">
                                <p class="font-semibold">Answer:</p>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $test->score ? 'bg-green-100 text-green-500' : 'bg-orange-300 text-orange-800' }}">
                                    {{ $test->score ? 'Score: ' . $test->score : 'Still being checked' }}
                                </span>
                            </div>

                            <div class="ml-3">
                                <x-tinyview :data="$test->answer"></x-tinyview>
                                @if ($test->notes)
                                    <div class="mt-4">
                                        <p class="font-bold text-orange-500">NOTES:</p>
                                        <x-tinyview :data="$test->notes"></x-tinyview>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection