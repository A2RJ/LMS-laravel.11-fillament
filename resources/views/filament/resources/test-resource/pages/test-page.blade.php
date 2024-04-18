<x-filament-panels::page class="p-0 bg-slate-100 dark:bg-inherit m-0 min-h-screen">
    <x-filament::breadcrumbs :breadcrumbs="[
    '/admin/tests' => 'Quizzes',
    '/admin/tests/2' => $this->getRecord()->title,
    '/admin/tests/2#' => 'Preview',
]" />
    <div class="static">
        <div class="p-4 pb-20 bg-slate-300 dark:bg-inherit">
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
                    @php
                    $start = \Carbon\Carbon::parse($this->getRecord()->start);
                    $end = \Carbon\Carbon::parse($this->getRecord()->end);
                    $duration = $end->diff($start);
                    @endphp
                    <p>{{ $duration->format('%H hr %I min') }}</p>
                </div>
                <div class="hidden lg:flex items-center gap-1 ">
                    <div class="w-1 h-1 bg-black dark:bg-white rounded-full"></div>
                </div>
                <div class="flex items-center gap-1">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                    </svg>
                    <p>Category: Sakeco</p>
                </div>
            </div>
            <p class="mt-4">
                <x-tinyview :view="$this->getRecord()->content"></x-tinyview>
            </p>
        </div>

        <div class="p-4 mx-4 bg-white dark:bg-gray-950 dark:border dark:border-slate-500 relative bottom-14 rounded-md">
            <div class="">
                <ul>
                    @foreach ($this->getRecord()->questions as $index => $question)
                    <li>
                        <p class="text-lg font-medium text-gray-900 dark:text-white">{{ $question->question }}</p>
                        @if ($question->answer_type == 'selected')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="">
                                <input type="radio" id="answer1{{ $index }}" name="hosting{{ $index }}" value="answer1" class="hidden peer" required />
                                <label for="answer1{{ $index }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full">Good for small websites lorem100</div>
                                    </div>
                                    <svg class="w-5 h-5 hidden svg-checked:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="">
                                <input type="radio" id="answer2{{ $index }}" name="hosting{{ $index }}" value="answer2" class="hidden peer" required />
                                <label for="answer2{{ $index }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full">Good for small websites</div>
                                    </div>
                                    <svg class="w-5 h-5 hidden svg-checked:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="">
                                <input type="radio" id="answer3{{ $index }}" name="hosting{{ $index }}" value="answer3" class="hidden peer" required />
                                <label for="answer3{{ $index }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full">Good for small websites</div>
                                    </div>
                                    <svg class="w-5 h-5 hidden svg-checked:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </label>
                            </div>
                            <div class="">
                                <input type="radio" id="answer4{{ $index }}" name="hosting{{ $index }}" value="answer4" class="hidden peer">
                                <label for="answer4{{ $index }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                    <div class="block">
                                        <div class="w-full">Good for large websites</div>
                                    </div>
                                    <svg class="w-5 h-5 hidden svg-checked:block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                        @else
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                        <textarea id="message" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        @endif
                    </li>
                    @endforeach
                </ul>

                <form wire:submit.prevent="submit">
                    <x-filament::button type="submit" class="mt-4">
                        Save
                    </x-filament::button>
                </form>
            </div>
        </div>
    </div>
</x-filament-panels::page>