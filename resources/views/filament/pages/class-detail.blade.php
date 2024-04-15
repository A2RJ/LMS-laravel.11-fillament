<x-filament-panels::page>
    <div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 lg:col-span-8">
                <p class="text-2xl font-bold">
                    {{ $this->form->model->title }}
                </p>

                <div class="">
                    <div class="w-full bg-center bg-cover rounded-md my-4" style="background-image: url('/storage/{{ $this->form->model->thumbnail }}'); height: 40vh;">
                    </div>
                </div>

                <p class="">
                    {{ $this->infolist }}
                </p>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <p class="font-bold my-2">
                    Sessions
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