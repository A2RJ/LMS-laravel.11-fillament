function j({
    state: r,
    statePath: n,
    selector: c,
    plugins: d,
    toolbar: u,
    language: m = "en",
    language_url: p = null,
    directionality: h = "ltr",
    max_height: f = 0,
    min_height: g = 500,
    skin: b = "oxide",
    content_css: y = "default",
    toolbar_sticky: w = !1,
    templates: _ = "",
    menubar: k = !1,
    relative_urls: C = !0,
    image_list: v = null,
    image_advtab: E = !1,
    image_description: T = !1,
    image_class_list: x = null,
    remove_script_host: F = !0,
    convert_urls: A = !0,
    custom_configs: $ = {},
    setup: a = null,
    disabled: D = !1,
    locale: V = "en",
    placeholder: q = null,
}) {
    let l = window.filamentTinyEditors || {};
    return {
        id: null,
        state: r,
        statePath: n,
        selector: c,
        language: m,
        language_url: p,
        directionality: h,
        max_height: f,
        min_height: g,
        skin: b,
        content_css: y,
        plugins: d,
        toolbar: u,
        toolbar_sticky: w,
        templates: _,
        menubar: k,
        relative_urls: C,
        remove_script_host: F,
        convert_urls: A,
        setup: a,
        image_list: v,
        image_advtab: E,
        image_description: T,
        image_class_list: x,
        custom_configs: $,
        updatedAt: Date.now(),
        disabled: D,
        locale: V,
        init() {
            this.initEditor(r.initialValue),
                (window.filamentTinyEditors = l),
                this.$watch("state", (e, o) => {
                    e === "<p></p>" &&
                        e !== this.editor().getContent() &&
                        (l[this.statePath].destroy(), this.initEditor(e)),
                        this.editor().container &&
                        e !== this.editor().getContent() &&
                        (this.editor().resetContent(e || ""),
                            this.putCursorToEnd());
                });
        },
        editor() {
            return tinymce.get(l[this.statePath]);
        },
        initEditor(e) {
            let o = this,
                P = this.$wire;
            tinymce.init({
                selector: c,
                language: m,
                language_url: p,
                directionality: h,
                statusbar: !1,
                promotion: !1,
                max_height: f,
                min_height: g,
                skin: b,
                content_css: y,
                plugins: d,
                toolbar: u,
                toolbar_sticky: w,
                toolbar_sticky_offset: 64,
                toolbar_mode: "floating",
                templates: _,
                menubar: k,
                menu: {
                    file: {
                        title: "File",
                        items: "newdocument restoredraft | preview | export print | deleteallconversations",
                    },
                    edit: {
                        title: "Edit",
                        items: "undo redo | cut copy paste pastetext | selectall | searchreplace",
                    },
                    view: {
                        title: "View",
                        items: "code | visualaid visualchars visualblocks | spellchecker | preview fullscreen | showcomments",
                    },
                    insert: {
                        title: "Insert",
                        items: "image link media addcomment pageembed template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor tableofcontents | insertdatetime",
                    },
                    format: {
                        title: "Format",
                        items: "bold italic underline strikethrough superscript subscript codeformat | styles blocks fontfamily fontsize align lineheight | forecolor backcolor | language | removeformat",
                    },
                    tools: {
                        title: "Tools",
                        items: "spellchecker spellcheckerlanguage | a11ycheck code wordcount",
                    },
                    table: {
                        title: "Table",
                        items: "inserttable | cell row column | advtablesort | tableprops deletetable",
                    },
                    help: { title: "Help", items: "help" },
                },
                relative_urls: C,
                remove_script_host: F,
                convert_urls: A,
                image_list: v,
                image_advtab: E,
                image_description: T,
                image_class_list: x,
                ...$,
                setup: function (t) {
                    window.tinySettingsCopy || (window.tinySettingsCopy = []),
                        t.settings &&
                        !window.tinySettingsCopy.some(
                            (i) => i.id === t.settings.id
                        ) &&
                        window.tinySettingsCopy.push(t.settings),
                        t.on("blur", function (i) {
                            (o.updatedAt = Date.now()),
                                (o.state = t.getContent());
                        }),
                        t.on("init", function (i) {
                            (l[o.statePath] = t.id),
                                e != null && t.setContent(e);
                        }),
                        typeof a == "function" && a(t);
                },
                images_upload_handler: (t, i) =>
                    new Promise((z, B) => {
                        if (!t.blob()) return;
                        let H = () => {
                            P.getFormComponentFileAttachmentUrl(n).then(
                                (s) => {
                                    if (!s) {
                                        B("error");
                                        return;
                                    }
                                    z(s);
                                }
                            );
                        },
                            S = () => { },
                            U = (s) => {
                                i(s.detail.progress);
                            };
                        P.upload(
                            `componentFileAttachments.${n}`,
                            t.blob(),
                            H,
                            S,
                            U
                        );
                    }),
                automatic_uploads: !0,
            });
        },
        updateEditorContent(e) {
            this.editor().setContent(e);
        },
        putCursorToEnd() {
            this.editor().selection.select(this.editor().getBody(), !0),
                this.editor().selection.collapse(!1);
        },
    };
}
export { j as default };
