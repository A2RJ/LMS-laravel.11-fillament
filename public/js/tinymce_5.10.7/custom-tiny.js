document.addEventListener('DOMContentLoaded', function () {
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
//     const sortableClass = [
//         'fi-fo-builder-item',
//         'fi-fo-repeater-item',
//     ];

//     Livewire.hook('morph.updated', (el) => {
//         if (!window.tinySettingsCopy) {
//             return;
//         }

//         const isModalOpen = document.body.classList.contains('tox-dialog__disable-scroll');

//         if (!isModalOpen && sortableClass.some(i => el.el.classList.contains(i))) {
//             removeEditors();
//             setTimeout(reinitializeEditors, 1);
//         }
//     })

//     const removeEditors = debounce(() => {
//         window.tinySettingsCopy.forEach(i => tinymce.execCommand('mceRemoveEditor', false, i.target.id));
//     }, 50);

//     const reinitializeEditors = debounce(() => {
//         window.tinySettingsCopy = window.tinySettingsCopy.filter(obj => document.getElementById(obj.id));
//         window.tinySettingsCopy.forEach(settings => tinymce.init(settings))
//     });

//     function debounce(callback, timeout = 100) {
//         let timer;
//         return (...args) => {
//             clearTimeout(timer);
//             timer = setTimeout(() => {
//                 callback.apply(this, args);
//             }, timeout);
//         };
//     }
// })


