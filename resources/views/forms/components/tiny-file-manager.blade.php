<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">

    <script src="/js/app/tinymce_5.10.7/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="/flmngr/plugins/file-manager/plugin.js"></script>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}'), initialized: false }" x-init="(() => {
            $nextTick(() => {
                    tinymce.createEditor('editor',{
                    selector: '#editor',
                    height: 500,
                    plugins: [
                        'file-manager', 'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'imgpen', 'preview',
                        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                        'insertdatetime', 'media', 'table', 'wordcount'
                    ],
                    toolbar: 'fullscreen undo redo | blocks | ' +
                        'bold italic backcolor | alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat | help',
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
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
        })" wire:ignore>
        <div>

            <textarea id="editor" x-model="state" ref="editor"></textarea>
            <script>
                // document.addEventListener('DOMContentLoaded', function() {
                const sortableClass = [
                    'fi-fo-builder-item',
                    'fi-fo-repeater-item',
                ];

                Livewire.hook('morph.updated', (el) => {
                    if (!window.tinySettingsCopy) {
                        return;
                    }

                    const isModalOpen = document.body.classList.contains('tox-dialog__disable-scroll');

                    if (!isModalOpen && sortableClass.some(i => el.el.classList.contains(i))) {
                        removeEditors();
                        setTimeout(reinitializeEditors, 1);
                    }
                })

                const removeEditors = debounce(() => {
                    window.tinySettingsCopy.forEach(i => tinymce.execCommand('mceRemoveEditor', false, i.target.id));
                }, 50);

                const reinitializeEditors = debounce(() => {
                    window.tinySettingsCopy = window.tinySettingsCopy.filter(obj => document.getElementById(obj.id));
                    window.tinySettingsCopy.forEach(settings => tinymce.init(settings))
                });

                function debounce(callback, timeout = 100) {
                    let timer;
                    return (...args) => {
                        clearTimeout(timer);
                        timer = setTimeout(() => {
                            callback.apply(this, args);
                        }, timeout);
                    };
                }

                // tinymce.init('#editor', {
                //     selector: '#editor',
                //     height: 500,
                //     plugins: [
                //         'file-manager', 'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'imgpen', 'preview',
                //         'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                //         'insertdatetime', 'media', 'table', 'wordcount'
                //     ],
                //     toolbar: 'fullscreen undo redo | blocks | ' +
                //         'bold italic backcolor | alignleft aligncenter ' +
                //         'alignright alignjustify | bullist numlist outdent indent | ' +
                //         'removeformat | help',
                //     content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
                //     Flmngr: {
                //         apiKey: 'NXyzC2Un',
                //         urlFileManager: 'http://127.0.0.1:8000/file',
                //         urlFiles: 'http://127.0.0.1:8000/storage'
                //     },
                //     setup: function(editor) {
                //         if (!window.tinySettingsCopy) {
                //             window.tinySettingsCopy = [];
                //         }

                //         if (!window.tinySettingsCopy.some(obj => obj.id === editor.settings.id)) {
                //             window.tinySettingsCopy.push(editor.settings);
                //         }

                //         editor.on('blur', function(e) {
                //             state = editor.getContent()
                //         })

                //         editor.on('init', function(e) {
                //             if (state != null) {
                //                 editor.setContent(state)
                //             }
                //         })

                //         editor.on('OpenWindow', function(e) {
                //             target = e.target.container.closest('.fi-modal')
                //             if (target) target.setAttribute('x-trap.noscroll', 'false')

                //             target = e.target.container.closest('.jetstream-modal')
                //             if (target) {
                //                 targetDiv = target.children[1]
                //                 targetDiv.setAttribute('x-trap.inert.noscroll', 'false')
                //             }
                //         })

                //         editor.on('CloseWindow', function(e) {
                //             target = e.target.container.closest('.fi-modal')
                //             if (target) target.setAttribute('x-trap.noscroll', 'isOpen')

                //             target = e.target.container.closest('.jetstream-modal')
                //             if (target) {
                //                 targetDiv = target.children[1]
                //                 targetDiv.setAttribute('x-trap.inert.noscroll', 'show')
                //             }
                //         })

                //         function putCursorToEnd() {
                //             editor.selection.select(editor.getBody(), true);
                //             editor.selection.collapse(false);
                //         }
                //     },
                // })
                // })
            </script>
            <!-- <script>
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
            </script> -->
        </div>
    </div>
</x-dynamic-component>