<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <style>
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
    </style>
    <div>
        {!! $getState() !!}
    </div>
</x-dynamic-component>