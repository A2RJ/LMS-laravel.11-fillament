<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $session_id
 * @property int $question_id
 * @property int $answer_id
 * @property int $user_id
 * @property \App\Models\Answer $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Question $question
 * @property-read \App\Models\Session $session
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereUserId($value)
 * @mixin \Eloquent
 */
class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_number',
        'user_id',
        'class_room_id',
        'session_id',
        'pre_test_id',
        'post_test_id',
        'question_id',
        'answer_id',
        'answer',
        'score',
        'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }
}
