<x-filament-panels::page class="p-0 dark:bg-inherit m-0 min-h-screen">
    <div class="p-4 pb-20 bg-white rounded-xl dark:bg-inherit border dark:border-slate-500">
        <div>
            <h1 class="text-2xl font-bold">{{ $this->session->classRoom->title }}</h1>
            <small class="text-sm font-medium text-slate-500">
                {{ $this->session->title }}
            </small>
        </div>

        <p>Pre Test: {{ $this->session->preTest?->title }}</p>
        <div class="rounded-lg border border-gray-200">
            <div class="overflow-x-auto rounded-t-lg">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Exam date</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @forelse ($this->pre_test as $pre_test)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="w-full h-40 flex justify-center items-center">No Data</div>
                                </td>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>

            <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
                <ol class="flex justify-end gap-1 text-xs font-medium">
                    <li>
                        <a href="#"
                            class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                            <span class="sr-only">Prev Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            1
                        </a>
                    </li>

                    <li class="block size-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                        2
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            3
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            4
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                            <span class="sr-only">Next Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
        </div>

        <p>Post Test: {{ $this->session->postTest?->title }}</p>
        <div class="rounded-lg border border-gray-200">
            <div class="overflow-x-auto rounded-t-lg">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Exam date</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @forelse ($this->post_test as $pre_test)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $pre_test->user->name }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $pre_test->created_at }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    {{ $pre_test->question->answer_type == 'selected' && $pre_test->score === NULL ? 'Belum diperiksa' : 'Sudah diperiksa' }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="w-full h-40 flex justify-center items-center">No Data</div>
                                </td>
                            </tr>
                        @endforelse 
                    </tbody>
                </table>
            </div>

            <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
                <ol class="flex justify-end gap-1 text-xs font-medium">
                    <li>
                        <a href="#"
                            class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                            <span class="sr-only">Prev Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            1
                        </a>
                    </li>

                    <li class="block size-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                        2
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            3
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                            4
                        </a>
                    </li>

                    <li>
                        <a href="#"
                            class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                            <span class="sr-only">Next Page</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!-- 
        - terdapat pilihan pre test dan post test dalam bentuk tabel masing-masing 
        - menampilkan user, score, badge telah diperiksa dan tidak (order by belum di periksa) 
        - terdapat menu assesment/periksa tugas user, lalu tampilkan test result
        - jika type jawaban == description maka tampil form penilaian berikan score dan note 
     -->
</x-filament-panels::page>