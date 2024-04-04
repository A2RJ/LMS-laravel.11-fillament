<x-filament-panels::page>
    {{ $this->form->model->title}}
    {{ $this->form->model->thumbnail}}
    <div class="container break-words">
        {!! $this->form->model->content !!}
    </div>
</x-filament-panels::page>