<div>
    <script src="/js/tinymce6/tinymce.min.js"></script>

    <textarea id="editor"></textarea>

    <script>
        "use strict";
        tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: [
                'file-manager', 'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'wordcount'
            ],
            toolbar: 'fullscreen undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            Flmngr: {
                apiKey: "NXyzC2Un",
                urlFileManager: 'http://127.0.0.1:8000/file',
                urlFiles: 'http://127.0.0.1:8000/storage',
            }
        });
    </script>
</div>