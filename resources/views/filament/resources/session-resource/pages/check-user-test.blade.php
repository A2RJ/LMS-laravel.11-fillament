<x-filament-panels::page class="p-0 dark:bg-inherit m-0 min-h-screen">
    <div class="p-4 max-w-screen-lg mx-auto bg-white border border-slate-300 rounded-lg grid grid-cols-1 gap-4">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 lg:col-span-1 flex justify-start items-center gap-2 mt-2">
                <div>
                    <a href="{{ route('session.id', $this->session->course_id) }}?page={{ $this->session->session_id }}"
                        class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                            <path fill="currentColor"
                                d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">{{ $this->session->course->title }}</h1>
                    <small class="text-sm font-medium text-slate-500">
                        {{ $this->session->session->title }}
                    </small>
                </div>
            </div>
            <div class="col-span-2 lg:col-span-1 flex justify-center lg:justify-end items-start">
                <form class="w-full lg:w-auto flex items-center"
                    action="{{ route('post.test.result', ['test_number' => $this->session->test_number]) }}"
                    method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-blue-500 w-full lg:w-auto hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg mt-3 flex items-center justify-center">
                        <span>Finish Checking Test</span>
                        <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path fill="#c8e6c9"
                                d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z">
                            </path>
                            <path fill="#4caf50"
                                d="M34.586,14.586l-13.57,13.586l-5.602-5.586l-2.828,2.828l8.434,8.414l16.395-16.414L34.586,14.586z">
                            </path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <div class="mb-8">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 text-white">
                <div class="rounded-lg lg:col-span-2 bg-cyan-500"
                    style="background-image: url('/circle-dot3-2.png');  background-repeat: no-repeat; background-position: right; background-size: contain; ">
                    <div class="flow-root rounded-lg border border-slate-300 py-3 shadow-sm">
                        <dl class="-my-3 text-sm">
                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-900">Name</dt>
                                <dd class=" sm:col-span-2">{{ $this->session->user->name }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Email</dt>
                                <dd class=" sm:col-span-2">{{ $this->session->user->email }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Class Name</dt>
                                <dd class=" sm:col-span-2">{{ $this->session->course->title }}
                                    ({{ $this->session->session->title }})</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Test Date</dt>
                                <dd class=" sm:col-span-2">{{ $this->session->created_at }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <div class="rounded-lg bg-cyan-500 border border-slate-300 py-3 shadow-sm"
                    style="background-image: url('/circle-dot3-1.png'); background-repeat: no-repeat; background-position: left; background-size: contain;">
                    <div class="flow-root rounded-lg ">
                        <dl class="-my-3 text-sm">
                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Test</dt>
                                <dd class=" sm:col-span-2">
                                    {{ isset($this->session->preTest) ? 'Pre Test' : 'Post Test' }}
                                </dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Total Question</dt>
                                <dd class=" sm:col-span-2">{{ count($this->tests) }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium ">Score</dt>
                                <dd class=" sm:col-span-2"></dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-2">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan Pesan Error -->
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-2">
                {{ session('error') }}
            </div>
        @endif

        <div class="lg:pr-32 lg:px-4 grid grid-cols-1 gap-8 pb-16">
            @foreach ($tests as $index => $test)
                <div class="" data-index="{{ $index }}">
                    <div class="flex space-x-4">
                        <h4 class="font-bold">{{ $index + 1 }}.</h4>
                        <h4 class="font-bold">{!! $test->question->question !!}</h4>
                    </div>
                    <div class="ml-8">
                        @if ($test->question->answer_type == 'selected')
                            @foreach ($test->question->answers as $option)
                                <label class="flex justify-start items-start space-x-2 space-y-4">
                                    <div class="m-0 p-0">
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
                                                    <path fill="#fff"
                                                        d="M29.656,15.516l2.828,2.828l-14.14,14.14l-2.828-2.828L29.656,15.516z">
                                                    </path>
                                                    <path fill="#fff"
                                                        d="M32.484,29.656l-2.828,2.828l-14.14-14.14l2.828-2.828L32.484,29.656z">
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
                                                    class="form-radio h-5 w-5 checked:bg-slate-500 text-slate-500 p-1 mt-5" disabled>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="text-justify">
                                        <x-tinyview :data="$option->answer"></x-tinyview>
                                    </div>
                                </label>
                            @endforeach
                        @else
                            <livewire:save-test-result-check :testId="$test->id" />
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <x-filament-actions::modals />
</x-filament-panels::page>