<x-filament-panels::page>
    <div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8">
                <p class="text-3xl font-bold">
                    {{ $this->form->model->title }}
                </p>

                <p class="flex justify-start items-center gap-1 mt-2">
                    <svg class="bg-blue-500 w-6 h-6 p-1 rounded-full text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    {{ $this->form->model->user->name }}
                </p>

                <div class="flex justify-between flex-col lg:flex-row font-normal text-slate-600 text-xs lg:text-sm">
                    <div>1 (1 Reviews)</div>
                    <div>12 Lessons</div>
                    <div>24 Quizzes</div>
                    <div>24 Students</div>
                </div>

                <div class="">
                    <div class="w-full bg-center bg-cover rounded-md my-4" style="background-image: url('/storage/{{ $this->form->model->thumbnail }}'); height: 40vh;">
                    </div>
                </div>

                <p class="">
                    {{ $this->infolist }}
                </p>
            </div>
            <div class="col-span-12 lg:col-span-4 border-l-2 border-blue-100 pl-2">
                <p class="font-bold my-2">
                    Sessions
                </p>
                <div class="flex flex-col gap-2">
                    @foreach ($this->form->model->sessions as $session)
                    <div class="group">
                        <div class="flex gap-1 rounded-md border border-slate-500 p-2 cursor-pointer hover:border-blue-500 group-hover:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                            </svg>
                            <p class="group-hover:text-white">{{ $session->title }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="font-bold my-2">
                    Reviews
                </p>
                <div class="flex flex-col gap-4">
                    @foreach ($this->form->model->sessions as $session)
                    <div class="w-1/4">
                        <p>{{ $session->title }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>