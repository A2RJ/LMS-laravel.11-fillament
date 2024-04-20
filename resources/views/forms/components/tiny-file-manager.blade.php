<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <script src="/js/tinymce6/tinymce.min.js"></script>

    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}'), initialized: false }" x-init="(() => {
            $nextTick(() => {
                    tinymce.createEditor('editor',{
                    selector: '#editor',
                    height: 600,
                    plugins: [
                        'file-manager', 'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                        'insertdatetime', 'media', 'table', 'wordcount', 'n1ed'
                    ],
                    toolbar: 'fullscreen undo redo spellcheckdialog formatpainter | blocks fontfamily fontsize | bold italic underline alignleft aligncenter alignright alignjustify | forecolor backcolor lineheight checklist bullist numlist indent outdent link removeformat',
                    content_style: 'body { font-family:Times New Roman,Arial,sans-serif; font-size:16px }',
                    Flmngr: {
                        apiKey: 'NXyzC2Un',
                        urlFileManager: 'http://127.0.0.1:8000/file',
                        urlFiles: 'http://127.0.0.1:8000/storage'
                    },
                    setup: function(editor) {
                        if(!window.tinySettingsCopy) {
                            window.tinySettingsCopy = [];
                        }

                        if (!window.tinySettingsCopy.some(obj => obj.id === editor.settings.id)) {
                            window.tinySettingsCopy.push(editor.settings);
                        }

                        editor.on('blur', function(e) {
                            state = editor.getContent()
                        })

                        editor.on('init', function(e) {
                            if (state != null) {
                                editor.setContent(state)
                            }
                        })

                        editor.on('OpenWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'false')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'false')
                            }
                        })

                        editor.on('CloseWindow', function(e) {
                            target = e.target.container.closest('.fi-modal')
                            if (target) target.setAttribute('x-trap.noscroll', 'isOpen')

                            target = e.target.container.closest('.jetstream-modal')
                            if (target) {
                                targetDiv = target.children[1]
                                targetDiv.setAttribute('x-trap.inert.noscroll', 'show')
                            }
                        })

                        function putCursorToEnd() {
                            editor.selection.select(editor.getBody(), true);
                            editor.selection.collapse(false);
                        }

                        $watch('state', function(newstate) {
                            // unfortunately livewire doesn't provide a way to 'unwatch' so this listener sticks
                            // around even after this component is torn down. Which means that we need to check
                            // that editor.container exists. If it doesn't exist we do nothing because that means
                            // the editor was removed from the DOM
                            if (editor.container && newstate !== editor.getContent()) {
                                editor.resetContent(newstate || '');
                                putCursorToEnd();
                            }
                        });
                    },
                }).render()
            });
             if (!window.tinyMceInitialized) {
                window.tinyMceInitialized = true;
                $nextTick(() => {
                    Livewire.hook('morph.removed', (el, component) => {
                        if (el.el.nodeName === 'INPUT' && el.el.getAttribute('x-ref') === 'tinymce') {
                            tinymce.get(el.el.id)?.remove();
                        }
                    });
                });
            }
        })" wire:ignore class="rounded-md">
        <div>
            <textarea id="editor" x-model="state" ref="editor"></textarea>
        </div>
    </div>
</x-dynamic-component>