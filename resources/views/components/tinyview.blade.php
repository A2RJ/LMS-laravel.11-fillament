<div>
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
        @php
            $view = preg_replace_callback(
                '/<iframe[^>]+>/',
                function ($matches) {
                    if (strpos($matches[0], 'youtube') === false) {
                        return str_replace('<iframe ', ' <iframe sandbox="" ', $matches[0]);
                    } else {
                        return $matches[0];
                    }
                },
                $view,
            );

            $view = preg_replace_callback(
                '/<video[^>]+>/',
                function ($matches) {
                    return str_replace('autoplay', '', $matches[0]);
                },
                $view,
            );

            $view = preg_replace_callback(
                '/(["\'])((?:\.\.\/)+storage\/[^"\']+)/',
                function ($matches) {
                    return $matches[1] . preg_replace('/^(?:\.\.\/)+/', '/', $matches[2]);
                },
                $view,
            );
        @endphp
        {!! $view !!}
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const videos = document.querySelectorAll('video');
            videos.forEach(video => {
                video.removeAttribute('autoplay');
            });

            const iframes = document.querySelectorAll('iframe');
            iframes.forEach(iframe => {
                if (!iframe.src.includes('youtube')) {
                    iframe.setAttribute('sandbox', '');
                }
            });
        });
    </script>
</div>
