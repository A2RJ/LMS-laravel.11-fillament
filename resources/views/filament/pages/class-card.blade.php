<x-filament-panels::page>
    <style>
        p[style*="text-align: center; text-align: center;"] {
            /* Mengganti text-align: center; text-align: center; menjadi display: flex; justify-content: center; */
            text-align: initial !important;
            /* Hapus text-align: center; */
            display: flex;
            justify-content: center;
        }

        /* Style untuk tabel */
        table {
            width: 80%;
            /* Lebar tabel */
            margin: 0 auto;
            /* Posisikan tabel di tengah */
            border-collapse: collapse;
        }

        /* Style untuk header tabel */
        th {
            padding: 8px;
            background-color: #f2f2f2;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }

        /* Style untuk baris pada tabel */
        tr {
            border-bottom: 1px solid #ddd;
        }

        /* Style untuk sel pada tabel */
        td {
            padding: 8px;
        }

        /* Style untuk sel pada kolom pertama */
        td:first-child {
            font-weight: bold;
        }
    </style>
    <!-- {{ $this->form->model->title}}
    {{ $this->form->model->thumbnail}} -->
    <div class="container break-words border rounded-sm p-4">
        {!! tiptap_converter()->asHTML($this->form->model->content) !!}
    </div>
</x-filament-panels::page>