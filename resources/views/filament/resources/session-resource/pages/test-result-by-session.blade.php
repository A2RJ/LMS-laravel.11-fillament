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
                            <!-- <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th> -->
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @php
                            $pre_tests = $this->paginate($this->pre_test, 'pre_test');
                        @endphp
                        @forelse ($pre_tests as $pre_test)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $pre_test->user->name }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $pre_test->created_at }}</td>
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
                {{ $pre_tests->appends(array_merge(request()->except('pre_test_page'), ['post_test_page' => request()->input('post_test_page')]))->links() }}
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
                        @php
                            $post_tests = $this->paginate($this->post_test, 'pre_test');
                        @endphp
                        @forelse ($post_tests as $post_test)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $post_test->user->name }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $post_test->created_at }}</td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    @if ($post_test->is_checked)
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                            Sudah diperiksa
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                            Belum diperiksa
                                        </span>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <a href="{{ route('filament.admin.resources.sessions.check.user.test', ['record' => $post_test->test_number]) }}"
                                        target="_blank"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Test result detail
                                    </a>
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
                {{ $post_tests->appends(['pre_test_page' => request()->input('pre_test_page')])->links() }}
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