<x-filament-panels::page class="p-0 dark:bg-inherit m-0 min-h-screen">
    <x-filament::breadcrumbs :breadcrumbs="[
        '/admin/tests' => 'Quizzes',
        '/admin/tests/2' => $this->getRecord()->title,
        '/admin/tests/2#' => 'Preview',
    ]" />
    <div class="p-4 pb-20 bg-white rounded-md dark:bg-inherit border dark:border-slate-500">
        <p class="text-2xl font-bold">{{ $this->getRecord()->title }}</p>
        <div class="flex justify-start items-center gap-1 mt-2">
            <svg class="bg-blue-500 w-6 h-6 p-1 rounded-full text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                5
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
            <p class="text-sm font-bold text-blue-500">{{ $this->getRecord()->user->name }}</p>
        </div>
        <div class="flex flex-col mt-2 lg:flex-row text-slate-500 dark:text-white font-normal gap-1 lg:gap-4 text-xs lg:text-sm">
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
                <p>{{ $this->getRecord()->questions->count() }} Question</p>
            </div>
            <div class="hidden lg:flex items-center gap-1 ">
                <div class="w-1 h-1 bg-black dark:bg-white rounded-full"></div>
            </div>
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <p>{{ $this->getRecord()->duration }}</p>
            </div>
        </div>
        <p class="mt-4">
            <x-tinyview :data="$this->getRecord()->content"></x-tinyview>
        </p>

        <hr class="mt-2 mb-4">

        <div class="">
            <div class="flex items-center gap-2">
                <p class="text-xl font-bold mb-2">Question List</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </div>

            <ul>
                @foreach ($this->getRecord()->questions as $index => $question)
                <li>
                    <div class="mt-4 mb-2 flex space-x-2">
                        <p>{{ $index + 1 }}.</p>
                        <p class="text-gray-900 dark:text-white">
                            {!! $question->question !!}
                        </p>
                    </div>
                    @if ($question->answer_type == 'selected')
                    @if (!$question->answers->count())
                    <div class="pl-8">
                        <div class="h-14 inline-flex items-center justify-center gap-1 w-full p-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                            </svg>
                            <p>No answer</p>
                        </div>
                    </div>
                    @else
                    @php
                    $options = ['A', 'B', 'C', 'D'];
                    @endphp
                    <div class="grid grid-rows-1 gap-2 ml-8">
                        @foreach ($question->answers as $indexAnswer => $answer)
                        <div class="row-span-1 flex items-start justify-start py-1 max-w-[80%]">
                            <input id="question{{ $index }}{{ $indexAnswer }}" type="radio" value="{{ $answer->answer }}" name="question{{ $index }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-0 dark:bg-gray-700 dark:border-gray-600" @if($answer->is_true) checked @else disabled @endif>
                            <label for="question{{ $index }}{{ $indexAnswer }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 flex gap-1">
                                {{ $options[$indexAnswer] }}.
                                {!! $answer->answer !!}
                            </label>
                        </div>

                        @endforeach
                    </div>
                    @endif
                    @else
                    <div class="pl-8">
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 pointer-events-none" placeholder="Write your thoughts here..."></textarea>
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-filament-panels::page>