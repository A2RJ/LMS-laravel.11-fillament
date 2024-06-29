@extends('components.layouts.home')

@section('content')
<script src="/js/tinymce_5.10.7/tinymce.min.js"></script>

<!-- Breadcrumb -->
<nav class="max-w-screen-xl mx-auto flex py-3 text-slate-700 rounded-lg dark:bg-slate-800 dark:border-slate-700" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-slate-700 hover:text-blue-600 dark:text-slate-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-slate-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <a href="#" class="ms-1 text-sm font-medium text-slate-700 hover:text-blue-600 md:ms-2 dark:text-slate-400 dark:hover:text-white">Sakeco</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">Kelas sakeco untuk
                    pemula</span>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">Pre Test</span>
            </div>
        </li>
    </ol>
</nav>

<div class="max-w-screen-xl min-h-[60vh] mx-auto mb-10 ">
    <div class="grid grid-cols-12 gap-2 mt-2 mb-6 text-white rounded-lg">
        <div class="col-span-10 flex justify-start space-x-2 p-4 rounded-lg bg-[#0292B7]" style="background-image: url('/circle-dot3-2.png'); background-repeat: no-repeat; background-position: right; ">
            <div>
                <a href="{{ url()->previous() }}" class="group flex justify-between space-x-2 items-center bg-transparent p-2 rounded-md transition-colors duration-150 border border-transparent hover:bg-blue-500 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white" width="32" height="32" viewBox="0 0 24 24" class="relative z-10 h-5 w-5 transition-colors duration-300 text-blue-500 group-hover:text-white">
                        <path fill="currentColor" d="m7.85 13l2.85 2.85q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L4.7 12.7q-.3-.3-.3-.7t.3-.7l4.575-4.575q.3-.3.713-.287t.712.312q.275.3.288.7t-.288.7L7.85 11H19q.425 0 .713.288T20 12t-.288.713T19 13z" />
                    </svg>
                </a>
            </div>
            <div>
                <h1 class="text-2xl font-bold">{{ $course->title }}</h1>
                <small class="text-sm font-medium">
                    {{ request('test') == 'pre' ? 'Pre Test ' : 'Post Test ' }} {{ $session->title }} -
                    {{ $session->test->title }}</small>
            </div>
        </div>
        <div class="col-span-2 flex justify-center items-center space-x-2 p-4 rounded-lg bg-[#0292B7]" style="background-image: url('/circle-dot3-1.png'); background-repeat: no-repeat; background-position: right; background-size: cover;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                <path fill="currentColor" d="M13 12.6V9q0-.425-.288-.712T12 8t-.712.288T11 9v3.975q0 .2.075.388t.225.337l2.8 2.8q.275.275.7.275t.7-.275t.275-.7t-.275-.7zM12 22q-1.875 0-3.512-.712t-2.85-1.925t-1.925-2.85T3 13t.713-3.512t1.924-2.85t2.85-1.925T12 4t3.513.713t2.85 1.925t1.925 2.85T21 13t-.712 3.513t-1.925 2.85t-2.85 1.925T12 22M2.05 7.3q-.275-.275-.275-.7t.275-.7L4.9 3.05q.275-.275.7-.275t.7.275t.275.7t-.275.7L3.45 7.3q-.275.275-.7.275t-.7-.275m19.9 0q-.275.275-.7.275t-.7-.275L17.7 4.45q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l2.85 2.85q.275.275.275.7t-.275.7M12 20q2.925 0 4.963-2.037T19 13t-2.037-4.962T12 6T7.038 8.038T5 13t2.038 4.963T12 20" />
            </svg>
            <h1 class="text-3xl font-bold" id="countdown">01:00</h1>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 min-h-[50vh]">
        <div class="col-span-4 bg-white p-4 rounded-lg">
            <div class="flex justify-center items-center gap-2 mb-4 bg-[#0292B7] text-white rounded-md p-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-white" width="32" height="32" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 5h14v2H7zm0 8v-2h14v2zM4 4.5A1.5 1.5 0 0 1 5.5 6A1.5 1.5 0 0 1 4 7.5A1.5 1.5 0 0 1 2.5 6A1.5 1.5 0 0 1 4 4.5m0 6A1.5 1.5 0 0 1 5.5 12A1.5 1.5 0 0 1 4 13.5A1.5 1.5 0 0 1 2.5 12A1.5 1.5 0 0 1 4 10.5M7 19v-2h14v2zm-3-2.5A1.5 1.5 0 0 1 5.5 18A1.5 1.5 0 0 1 4 19.5A1.5 1.5 0 0 1 2.5 18A1.5 1.5 0 0 1 4 16.5" />
                </svg>
                <h2 class="text-xl text-center font-semibold">Question List</h2>
            </div>
            <nav class="grid grid-cols-6 gap-4" aria-label="Pagination">
                @foreach ($session->questions as $index => $question)
                <div class="pagination-btn text-center rounded-lg bg-white border border-slate-300 text-slate-500 p-1" data-index="{{ $index }}">
                    {{ $index + 1 }}
                </div>
                @endforeach
            </nav>
        </div>

        <div class="col-span-8 bg-white p-4 rounded-lg">
            <form id="form" action="{{ route('post.test.id', ['course' => $course->id, 'session' => $session->id, 'test_type_id' => $session->test->id, 'test_type' => request('test')]) }}" method="post">
                @csrf
                @foreach (collect($session->questions)->shuffle() as $index => $question)
                <div class="question" data-index="{{ $index }}" style="display: none;">
                    <h2 class="text-xl text-center font-semibold mb-4 text-[#0292B7]">Question number {{ $index + 1 }}</h2>
                    <p class="mb-4 font-semibold">{!! $question->question !!}</p>
                    <div class="mb-4">
                        @if ($question->answer_type == 'selected')
                        @foreach ($question->answers as $option)
                        <label class="flex justify-start items-start space-x-2 space-y-4">
                            <input type="radio" name="{{ $question->id }}" value="{{ $option->id }}" class="mt-5">
                            <x-tinyview :data="$option->answer"></x-tinyview>
                        </label>
                        @endforeach
                        @else
                        <div class="mt-4">
                            <textarea id="editor{{ $question->id }}" name="{{ $question->id }}"></textarea>
                            <small class="text-orange-500">NOTE: Type your answer inside the box</small>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </form>

            <div class="mt-6 flex justify-end space-x-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" id="prev-btn">Prev</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" id="next-btn">Next</button>
            </div>
        </div>
    </div>

    <div class="relative z-10 hidden" id="modal" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-blur-md"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                    Perhatian:
                                    Jawaban Belum Lengkap</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Harap periksa kembali, belum semua pertanyaan
                                        telah
                                        dijawab.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" id="cancel-button">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative z-10 hidden" id="modal-save" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity backdrop-blur-md"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                    Perhatian:
                                    Mohon periksa kembali</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Yakin simpan jawaban?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" id="save">Save</button>
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" id="cancel-save">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="hidden" name="default" value='<script src="//cdn.public.flmngr.com/NXyzC2Un/widgets.js"></script>'>

    <script>
        function startCountdown(duration, display) {
            var timer = duration,
                minutes, seconds;
            var interval = setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(interval);
                    display.textContent = "00:00";
                }
            }, 1000);
        }

        window.onload = function() {
            var countdownElement = document.getElementById("countdown");
            var timeArray = countdownElement.textContent.split(":");
            var minutes = parseInt(timeArray[0], 10);
            var seconds = parseInt(timeArray[1], 10);
            var totalSeconds = minutes * 60 + seconds;

            startCountdown(totalSeconds, countdownElement);
        };

        document.addEventListener('DOMContentLoaded', () => {
            const textareas = document.querySelectorAll('textarea');
            const textareaIds = Array.from(textareas).map(textarea => textarea.id);
            textareaIds.forEach(function(id) {
                tinymce.init({
                    selector: '#' + id,
                    height: 400,
                    deprecation_warnings: false,
                    plugins: [
                        'file-manager', 'advlist', 'autolink', 'lists', 'link', 'charmap',
                        'preview',
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
            })


            const modal = document.getElementById('modal');
            const cancelButton = document.getElementById('cancel-button');

            const openModal = () => {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            };

            const closeModal = () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            };
            cancelButton.addEventListener('click', closeModal);

            const modalSave = document.getElementById('modal-save');
            const save = document.getElementById('save');
            const cancelSave = document.getElementById('cancel-save');

            const openModalSave = () => {
                modalSave.classList.remove('hidden');
                modalSave.classList.add('flex');
            };

            const saveAction = () => {
                const form = document.getElementById('form');
                form.submit();
            };
            save.addEventListener('click', saveAction);
            const cancelModalSave = () => {
                modalSave.classList.add('hidden');
                modalSave.classList.remove('flex');
            };
            cancelSave.addEventListener('click', cancelModalSave);

            const questions = document.querySelectorAll('.question');
            const buttons = document.querySelectorAll('.pagination-btn');
            let currentQuestionIndex = 0;
            const answeredQuestions = new Set();

            const showQuestion = (index) => {
                questions.forEach((question, idx) => {
                    question.style.display = idx === index ? 'block' : 'none';
                });
            };

            const updateButtons = () => {
                buttons.forEach((button, idx) => {
                    button.classList.remove('bg-blue-500', 'bg-green-500', 'text-white');
                    button.classList.add('bg-gray-200', 'text-gray-700');

                    if (idx === currentQuestionIndex) {
                        button.classList.remove('bg-gray-200', 'bg-white');
                        button.classList.add('bg-blue-500', 'text-white');
                    } else if (answeredQuestions.has(idx)) {
                        button.classList.add('bg-green-500', 'text-white');
                    }
                });

                const nextBtn = document.getElementById('next-btn');
                if (currentQuestionIndex === questions.length - 1) {
                    nextBtn.textContent = 'Selesai';
                    nextBtn.classList.remove('bg-blue-500', 'hover:bg-blue-600');
                    nextBtn.classList.add('bg-green-500', 'hover:bg-green-600');
                } else {
                    nextBtn.textContent = 'Next';
                    nextBtn.classList.remove('bg-green-500', 'hover:bg-green-600');
                    nextBtn.classList.add('bg-blue-500', 'hover:bg-blue-600');
                }
            };

            buttons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    currentQuestionIndex = index;
                    showQuestion(currentQuestionIndex);
                    updateButtons();
                });
            });

            document.getElementById('prev-btn').addEventListener('click', () => {
                if (currentQuestionIndex > 0) {
                    currentQuestionIndex--;
                    showQuestion(currentQuestionIndex);
                    updateButtons();
                }
            });

            document.getElementById('next-btn').addEventListener('click', () => {
                const currentQuestion = document.querySelectorAll('.question')[currentQuestionIndex];
                const radios = currentQuestion.querySelectorAll('input[type="radio"]');
                const textarea = currentQuestion.querySelector('textarea');

                let textareaContent = '';
                if (textarea) {
                    textareaContent = tinymce.get(textarea.id).getContent();
                }


                const defaultTextarea = document.getElementsByName('default')[0];
                const defaultTextareaContent = defaultTextarea ? defaultTextarea.value : null;

                let answered = false;
                for (let i = 0; i < radios.length; i++) {
                    if (radios[i].checked) {
                        answered = true;
                        break;
                    }
                }

                if (!answered && textarea) {
                    if (defaultTextareaContent === textareaContent) {
                        answeredQuestions.delete(currentQuestionIndex);
                    }
                    if (defaultTextareaContent !== textareaContent) {
                        answered = true;
                    }
                }

                if (answered) {
                    answeredQuestions.add(currentQuestionIndex);
                }

                if (currentQuestionIndex < questions.length - 1) {
                    currentQuestionIndex++;
                    showQuestion(currentQuestionIndex);
                    updateButtons();
                } else {
                    openModal();
                }

                const totalQuestions = Array.from(questions).filter(question => question.querySelector(
                    'input[type="radio"]') || question.querySelector('textarea')).length;
                if (answeredQuestions.size === totalQuestions) {
                    openModalSave();
                }
            });

            showQuestion(currentQuestionIndex);
            updateButtons();
        });
    </script>
</div>
@endsection