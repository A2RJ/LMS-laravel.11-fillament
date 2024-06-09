<div class="border border-slate-300 rounded p-2 mt-2">
    <div class="flex justify-between items-center">
        <p class="font-semibold">Answer:</p>
        <span
            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $test->score ? 'bg-green-100 text-green-500' : 'bg-orange-300 text-orange-800' }}">
            {{ $test->score ? "Score: " . $test->score : "Still being checked" }}
        </span>
    </div>

    <div class="">
        <div class="p-4">
            <x-tinyview :data="$test->answer"></x-tinyview>
            @if ($test->notes)
                <div class="mt-4">
                    <p class="font-bold text-orange-500">NOTES:</p>
                    <x-tinyview :data="$test->notes"></x-tinyview>
                </div>
            @endif
        </div>
        @if ($test->score === null)
            <div class="mt-6 border-t border-slate-400 p-4">
                <form wire:submit="create">
                    {{ $this->form }}
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mt-3">
                        Save
                    </button>
                </form>
            </div>
        @endif
    </div>
</div>