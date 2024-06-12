<x-filament-panels::page>
    <div class="bg-white p-4 rounded-md border">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8">
                <p class="text-3xl font-bold">
                    {{ $this->lesson->title }}
                </p>

                <div class="flex justify-start items-center gap-1 mt-2">
                    <svg class="bg-blue-500 w-6 h-6 p-1 rounded-full text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        5
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <p class="text-sm font-bold text-blue-500">{{ $this->getRecord()->user->name }}</p>
                </div>

                <div
                    class="flex justify-between flex-col mt-2 lg:flex-row font-normal text-slate-600 text-xs lg:text-sm">
                    <div class="flex items-center gap-1">
                        <svg class="text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                clip-rule="evenodd" />
                        </svg>
                        <b>4,9</b>
                        <p>(1 Reviews)</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="text-blue-500 bg-blue-200 rounded-full w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                        </svg>
                        <b>{{ $this->getRecord()->sessions->count() + 1 }}</b>
                        <p> Lessons</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="text-slate-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                        <b>24</b>
                        <p> Quizzes</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg class="text-slate-500 w-4 h-4 p-[2px] border border-slate-500 rounded-full"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        <b>24</b>
                        <p>Students</p>
                    </div>
                </div>

                <div class="">
                    <div class="w-full bg-center bg-cover rounded-md my-4"
                        style="background-image: url('/storage/{{ $this->getRecord()->thumbnail }}'); height: 40vh;">
                    </div>
                </div>

                <p class="">
                    <x-tinyview :data="$this->lesson->content"></x-tinyview>
                </p>
            </div>
            <div
                class=" col-span-12 lg:col-span-4 border-l-2 border-blue-100 pl-2 lg:sticky lg:top-0 lg:self-start overflow-y-auto max-h-[100vh] scrollbar-hide custom-class-right-side">
                <p class="font-bold my-2">
                    Sessions
                </p>
                <div class="flex flex-col gap-2">
                    <a
                        href="{{ route('filament.admin.resources.class-rooms.view', ['record' => $this->getRecord()->id]) }}">
                        <div class="group">
                            <div
                                class="flex items-center justify-between gap-1 rounded-md border border-slate-500 p-2 cursor-pointer hover:border-blue-500 group-hover:bg-blue-500">
                                <div class="flex gap-1 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                                    </svg>
                                    <p class="group-hover:text-white font-normal text-sm">Introduction</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-orange-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    @foreach ($this->getRecord()->sessions as $index => $session)
                            <a
                                href="{{ route('filament.admin.resources.class-rooms.lesson', ['record' => $this->getRecord()->id, 'lesson' => $session->id]) }}">
                                <div class="group">
                                    <div class="flex items-center justify-between gap-1 rounded-md border border-slate-500 p-2 cursor-pointer hover:border-blue-500 group-hover:bg-blue-500  {{ request('lesson') == $session->id ? 'bg-blue-500 text-white' : '' }}"">
                                        <div class=" flex gap-1 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-hover:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                                        </svg>
                                        <p class="group-hover:text-white font-normal text-sm">{{ $session->title }}</p>
                                    </div>
                                    @if ($index % 2 == 1)
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4 text-orange-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4 group-hover:text-white text-blue-500">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 10.5V6.75a4.5 4.5 0 1 1 9 0v3.75M3.75 21.75h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H3.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                        </svg>

                                    @endif

                                </div>
                        </div>
                        </a>
                    @endforeach
            </div>
            <p class="font-bold my-2">
                Announcements:
            </p>
            <div class="flex flex-col gap-4 mb-32">
                @foreach (range(5, 1) as $announcement)
                    <div class="p-4 bg-gray-200 rounded-lg">
                        <p class="text-sm text-gray-700">Pengumuman ke-{{ $announcement }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <script>
        window.addEventListener('scroll', function () {
            var rightSide = document.querySelector('.custom-class-right-side');
            if (window.scrollY >= 122) {
                rightSide.style.top = '90px';
            } else {
                rightSide.style.top = '0px';
            }
        });
    </script>
</x-filament-panels::page>