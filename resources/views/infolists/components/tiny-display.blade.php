<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <style scoped>
        p[style*="text-align: center;"] {
            text-align: initial !important;
            display: flex;
            justify-content: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th {
            padding: 8px;
            background-color: #f2f2f2;
            text-align: left;
            border: 1px solid #ddd;
            /* full border atas, bawah, kiri, kanan */
        }

        tr {
            border: 1px solid #ddd;
            /* full border atas, bawah */
        }

        td {
            padding: 8px;
            border: 1px solid #ddd;
            /* full border atas, bawah, kiri, kanan */
        }

        tr:first-child {
            font-weight: bold;
        }

        .custom-tiny>ul {
            margin-top: 1rem;
            margin-bottom: 1rem;
            color: #6b7280;
            list-style-type: disc;
            padding-left: 2rem;
        }

        .dark ul {
            color: #9ca3af;
        }

        .custom-tiny a {
            text-decoration: underline;
            color: #0077cc;
            /* Ganti dengan warna yang diinginkan */
        }
    </style>
    <div class="custom-tiny">
        {!! $getState() !!}
    </div>
</x-dynamic-component>