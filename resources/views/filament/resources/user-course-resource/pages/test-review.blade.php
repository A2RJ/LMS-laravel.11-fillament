<x-filament-panels::page>
    <div class="grid grid-cols-2 min-h-[30vh] bg-white rounded-lg shadow-sm bg-gradient-to-r from-cyan-500 to-blue-500">
        <div class="p-10 pl-20 pt-14">
            <a href="#" class="mb-3 block text-xl font-bold text-white">{{ $this->record->title }}</a>

            <div class="flex flex-row space-x-4">
                <p class="flex items-center gap-1 text-sm leading-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" width="32" height="32" viewBox="0 0 20 20">
                        <path fill="currentColor" d="M6 3h8a1 1 0 0 1 1 1v5.022q.516.047 1 .185V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h4.257a5.5 5.5 0 0 1-.657-1H6a1 1 0 0 1-1-1h4.207a5.5 5.5 0 0 1-.185-1H5V4a1 1 0 0 1 1-1m1 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm6 1v1H7V5zm6 9.5a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4.98-1.966a.45.45 0 0 0-.447-.037a.5.5 0 0 0-.155.108a.5.5 0 0 0-.145.357v3.075a.5.5 0 0 0 .145.358a.6.6 0 0 0 .157.11a.45.45 0 0 0 .323.02a.5.5 0 0 0 .13-.064l2.296-1.567a.47.47 0 0 0 .163-.185a.54.54 0 0 0-.003-.487a.5.5 0 0 0-.167-.182z" />
                    </svg>
                    <span>23 Session</span>
                </p>
                <p class="flex items-center gap-1 text-sm leading-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" width="32" height="32" viewBox="0 0 48 48">
                        <path fill="currentColor" fill-rule="evenodd" d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z" clip-rule="evenodd" />
                    </svg>
                    <span>{{ $this->record->total_teachers ?? 0 }} Teachers</span>
                </p>
                <p class="flex justify-start items-center gap-1 text-sm leading-none text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 p-[3px] text-white" width="32" height="32" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M1.637 1.637C.732 1.637 0 2.369 0 3.273v17.454c0 .904.732 1.636 1.637 1.636h20.726c.905 0 1.637-.732 1.637-1.636V3.273c0-.904-.732-1.636-1.637-1.636zm.545 2.181h19.636v16.364h-2.726v-1.09h-4.91v1.09h-12zM12 8.182a1.636 1.636 0 1 0 0 3.273a1.636 1.636 0 1 0 0-3.273m-4.363 1.91c-.678 0-1.229.55-1.229 1.226a1.228 1.228 0 0 0 2.455 0c0-.677-.549-1.226-1.226-1.226m8.726 0a1.227 1.227 0 1 0 0 2.453a1.227 1.227 0 0 0 0-2.453M12 12.545c-1.179 0-2.413.401-3.148 1.006a4.1 4.1 0 0 0-1.215-.188c-1.314 0-2.729.695-2.729 1.559v.896h14.184v-.896c0-.864-1.415-1.559-2.729-1.559c-.41 0-.83.068-1.215.188c-.735-.605-1.969-1.006-3.148-1.006" />
                    </svg>
                    <span>{{ $this->record->total_students ?? 0 }} Students</span>
                </p>
            </div>
        </div>
        <div style="background-image: url('/dalam-loka.png'); 
           background-position-x: right; 
           background-position-y: 10px; 
           background-size: contain;
           background-repeat: no-repeat;">
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($this->report as $course)
            <div class="overflow-x-auto rounded-lg border border-gray-200 mb-4">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th colspan="4" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">User: {{ $course['user'] }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Course: {{ $course['course']->title }}</th>
                        </tr>
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Type</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Attendance</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Score</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($course['session'] as $session)
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Session</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['title'] }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                @if ($session['attendance'])
                                <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded" checked disabled>
                                @else
                                <input type="checkbox" class="h-5 w-5 text-green-600 border-gray-300 rounded" disabled>
                                @endif
                            </td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700"></td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <a href="#" class="inline-flex items-center gap-2 rounded border border-indigo-600 bg-indigo-600 px-2 py-1 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                                    <span class="text-sm font-medium"> Detail </span>
                                    <svg class="size-3 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Pre Test</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['pre_test'] }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['pre_test_result'] ? 'Passed' : 'N/A' }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['pre_test_total_score'] }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <a href="#" class="inline-flex items-center gap-2 rounded border px-2 py-1 text-indigo-600 hover:bg-transparen focus:outline-none focus:ring active:bg-indigo-500">
                                    <span class="text-sm font-medium"> Detail </span>
                                    <svg class="size-3 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Post Test</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['post_test'] }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['post_test_result'] ? 'Passed' : 'N/A' }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $session['post_test_total_score'] }}</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                <a href="#" class="inline-flex items-center gap-2 rounded border px-2 py-1 text-indigo-600 hover:bg-transparen focus:outline-none focus:ring active:bg-indigo-500">
                                    <span class="text-sm font-medium"> Detail </span>
                                    <svg class="size-3 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="border-t border-gray-400">
                            <td colspan="3" class="text-right px-4 py-2 font-bold text-gray-900">Total Score</td>
                            <td class="px-4 py-2 font-bold text-gray-700">{{ $course['total_score'] }}</td>
                        </tr>
                        <tr class="border-b border-gray-400">
                            <td colspan="3" class="text-right px-4 py-2 font-bold text-gray-900">Grade</td>
                            <td class="px-4 py-2 font-bold text-gray-700">{{ $course['grade'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endforeach
        </div>
    </div>

</x-filament-panels::page>