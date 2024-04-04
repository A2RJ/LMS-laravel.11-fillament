<x-filament-panels::page>
    <!-- <script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js"></script> -->
    <style>
        p[text-align="center"] {
            text-align: center;
            /* Pusatkan teks secara horizontal */
            display: flex;
            /* Gunakan flexbox */
            align-items: center;
            /* Pusatkan konten secara vertikal */
            justify-content: center;
            /* Pusatkan konten secara horizontal */
        }
    </style>
    {{ $this->form }}
    {{ $this->form->model->title}}
    {{ $this->form->model->thumbnail}}
    <div class="container break-words">
        {!! $this->form->model->content !!}
    </div>
</x-filament-panels::page>