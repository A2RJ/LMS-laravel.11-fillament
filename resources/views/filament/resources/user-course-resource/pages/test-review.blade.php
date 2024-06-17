<x-filament-panels::page>
    <p>Course Title: {{ $this->record->title }}</p>
    <p>Total User: {{ $this->record->userCourses->count() }}</p>

    @foreach ($this->record->userCourses as $course)
    <div class="overflow-x-auto mb-4">
        <table class="min-w-full shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr>
                    <th colspan="3" class="text-center px-4 py-2">User: {{ $course->user->name }}</th>
                </tr>
                <tr>
                    <th colspan="3" class="text-center px-4 py-2">Course: {{ $course->course->title }}</th>
                </tr>
                <tr>
                    <th class="bg-gray-600 text-white px-4 py-2">Session</th>
                    <th class="bg-gray-600 text-white px-4 py-2">Pre Test</th>
                    <th class="bg-gray-600 text-white px-4 py-2">Post Test</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course->course->sessions as $session)
                <tr class="border-b border-gray-200">
                    <td class="px-4 py-2">{{ $session->title }}</td>
                    <td class="px-4 py-2">{{ $session->preTest?->title ?? 'N/A' }}</td>
                    <td class="px-4 py-2">{{ $session->postTest?->title ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endforeach


</x-filament-panels::page>