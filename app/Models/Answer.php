<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'is_true',
        'score',
        'answer'
    ];

    protected function isTrue(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => $value === "true"
        );
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
