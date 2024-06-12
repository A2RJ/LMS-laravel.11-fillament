<?php

namespace App\Livewire;

use App\Forms\Components\TinyFileManager;
use App\Models\TestResult;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Livewire\Component;

class SaveTestResultCheck extends Component implements HasForms
{
    use InteractsWithForms;
    public ?array $data = [];
    public $testId, $test;

    public $number;

    public function mount($testId): void
    {
        $this->form->fill();
        $this->testId = $testId;
        $this->test = TestResult::query()
            ->where('id', $testId)
            ->with([
                'user',
                'course',
                'session',
                'preTest',
                'postTest',
                'question' => function (BelongsTo $query) {
                    $query->with('answers');
                },
                'answered'
            ])
            ->first();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Score')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->minValue(0)
                    ->maxValue(100),
                // RichEditor::make('Note'),
                TinyFileManager::make('Note')
                    ->required()
                    ->columnSpanFull(),
                Hidden::make('id')->default($this->testId),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        $form = $this->form->getState();
        $score = $form['Score'];
        $note = $form['Note'];
        $testId = $form['id'];

        $test = TestResult::query()
            ->where('id', $testId)
            ->first();

        $test->update([
            'score' => $score,
            'notes' => $note,
        ]);

        $test->refresh();
        $this->test = $test;
    }
    public function render()
    {
        return view('livewire.save-test-result-check');
    }
}

