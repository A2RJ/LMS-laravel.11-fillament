@extends('components.layouts.home')

@section('content')
<!-- Breadcrumb -->
<nav class="max-w-screen-lg mx-auto flex mt-4 px-5 py-3 text-slate-700 border border-slate-200 rounded-lg bg-white dark:bg-slate-800 dark:border-slate-700" aria-label="Breadcrumb">
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
                <span class="ms-1 text-sm font-medium text-slate-500 md:ms-2 dark:text-slate-400">Kelas sakeco untuk pemula</span>
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

<div class="mt-4 max-w-screen-lg min-h-[60vh] mx-auto">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Section Nomor Soal -->
        <div class="mb-6">
            <nav class="grid grid-cols-12" aria-label="Pagination">
                @foreach ($questions as $index => $question)
                <div class="pagination-btn text-center bg-white border border-slate-300 text-slate-500 px-4 py-2" data-index="{{ $index }}">
                    {{ $index + 1 }}
                </div>
                @endforeach
            </nav>
        </div>

        <!-- Form Section Soal dan Jawaban -->
        <form id="form" action="{{ route('post.test.id', 12) }}" method="post">
            @csrf
            @foreach ($questions as $index => $question)
            <div class="question" data-index="{{ $index }}" style="display: none;">
                <h2 class="text-xl font-semibold mb-4">Soal Nomor {{ $index + 1 }}</h2>
                <p class="mb-4">{{ $question['question'] }}</p>
                <div class="mb-4">
                    @foreach ($question['options'] as $option)
                    <label class="block mb-2">
                        <input type="radio" name="answer{{ $question['id'] }}" value="{{ $option }}" class="mr-2">
                        {{ $option }}
                    </label>
                    @endforeach
                </div>
            </div>
            @endforeach
        </form>

        <!-- Action Section -->
        <div class="mt-6 flex justify-start space-x-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" id="prev-btn">Prev</button>
            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600" id="skip-btn">Skip</button>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" id="next-btn">Next</button>
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
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Perhatian: Jawaban Belum Lengkap</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Harap periksa kembali, belum semua pertanyaan telah dijawab.</p>
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
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Perhatian: Mohon periksa kembali</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Yakin simpan jawaban?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" class="inline-flex w-full justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" id="save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
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

            const openModalSave = () => {
                modalSave.classList.remove('hidden');
                modalSave.classList.add('flex');
            };

            const saveAction = () => {
                const form = document.getElementById('form');
                form.submit();
            };
            save.addEventListener('click', saveAction);

            const questions = document.querySelectorAll('.question');
            const buttons = document.querySelectorAll('.pagination-btn');
            let currentQuestionIndex = 0;
            const skippedQuestions = new Set();
            const answeredQuestions = new Set();

            const showQuestion = (index) => {
                questions.forEach((question, idx) => {
                    question.style.display = idx === index ? 'block' : 'none';
                });
            };

            const updateButtons = () => {
                buttons.forEach((button, idx) => {
                    button.classList.remove('bg-blue-500', 'bg-yellow-500', 'bg-green-500', 'text-white');
                    button.classList.add('bg-gray-200', 'text-gray-700');

                    if (idx === currentQuestionIndex) {
                        button.classList.remove('bg-gray-200', 'bg-white');
                        button.classList.add('bg-blue-500', 'text-white');
                    } else if (skippedQuestions.has(idx)) {
                        button.classList.add('bg-yellow-500', 'text-white');
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

            document.getElementById('skip-btn').addEventListener('click', () => {
                skippedQuestions.add(currentQuestionIndex);
                if (currentQuestionIndex < questions.length - 1) {
                    currentQuestionIndex++;
                } else {
                    currentQuestionIndex = 0;
                }
                showQuestion(currentQuestionIndex);
                updateButtons();
            });


            document.getElementById('next-btn').addEventListener('click', () => {
                answeredQuestions.add(currentQuestionIndex);
                skippedQuestions.delete(currentQuestionIndex);
                if (currentQuestionIndex < questions.length - 1) {
                    currentQuestionIndex++;
                    showQuestion(currentQuestionIndex);
                    updateButtons();
                } else {
                    if (skippedQuestions.size !== 0) {
                        openModal()
                    } else {
                        openModalSave()
                    }
                }
            });

            showQuestion(currentQuestionIndex);
            updateButtons();
        });
    </script>
</div>

@endsection