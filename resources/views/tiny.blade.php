<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js"></script>
        <script src="/flmngr/plugins/file-manager/plugin.js"></script>

        <textarea id="editor">
        <p><img style="display: block; margin-left: auto; margin-right: auto;" title="Tiny Logo" src="https://www.tiny.cloud/docs/images/logos/android-chrome-256x256.png" alt="TinyMCE Logo" width="128" height="128"></p>
        <h2 style="text-align: center;">Welcome to the TinyMCE editor demo!</h2>

        <h2>Got questions or need help?</h2>

        <ul>
            <li>Our <a href="https://www.tiny.cloud/docs/tinymce/6/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
            <li>Have a specific question? Try the <a href="https://stackoverflow.com/questions/tagged/tinymce" target="_blank" rel="noopener"><code>tinymce</code> tag at Stack Overflow</a>.</li>
            <li>We also offer enterprise grade support as part of <a href="https://www.tiny.cloud/pricing">TinyMCE premium plans</a>.</li>
        </ul>

        <h2>A simple table to play with</h2>

        <table style="border-collapse: collapse; width: 100%;" border="1">
            <thead>
            <tr>
                <th>Product</th>
                <th>Cost</th>
                <th>Really?</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>TinyMCE</td>
                <td>Free</td>
                <td>YES!</td>
            </tr>
            <tr>
                <td>Plupload</td>
                <td>Free</td>
                <td>YES!</td>
            </tr>
            </tbody>
        </table>

        <h2>Found a bug?</h2>

        <p>
            If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.
        </p>

        <h2>Finally ...</h2>

        <p>
            Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.
        </p>
        <p>
            Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.
        </p>
    </textarea>

        <script>
            "use strict";
            tinymce.init({
                selector: '#editor',
                height: 500,
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
</body>

</html>