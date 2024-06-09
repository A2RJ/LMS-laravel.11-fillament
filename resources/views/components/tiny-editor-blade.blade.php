<div>
    <script src="/js/tinymce_5.10.7/tinymce.min.js"></script>
    <textarea id="editor"></textarea>

    <script>
        "use strict";
        tinymce.init({
            selector: '#editor',
            height: 400,
            deprecation_warnings: false,
            toolbar_sticky: false,
            toolbar_sticky_offset: 64,
            object_resizing: true,
            plugins: [
                'file-manager', 'image', 'imagetools', 'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'wordcount', 'youtube', 'emoticons'
            ],
            ui: {
                useAutoToolbar: false
            },
            toolbar: 'fullscreen undo redo spellcheckdialog formatpainter | Upload Flmngr blocks fontfamily fontsize | bold italic underline alignleft aligncenter alignright alignjustify | forecolor backcolor lineheight checklist bullist numlist indent outdent link removeformat youtube file-manager image',

            // plugins: [
            //     'file-manager', 'advlist', 'autolink', 'lists', 'link', 'charmap', 'preview',
            //     'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            //     'insertdatetime', 'media', 'table', 'wordcount'
            // ],
            // toolbar: 'fullscreen undo redo | blocks | ' +
            //     'bold italic backcolor | alignleft aligncenter ' +
            //     'alignright alignjustify | bullist numlist outdent indent | ' +
            //     'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            Flmngr: {
                apiKey: "NXyzC2Un",
                urlFileManager: 'http://127.0.0.1:8000/file',
                urlFiles: 'http://127.0.0.1:8000/storage',
            }
        });
    </script>
</div>