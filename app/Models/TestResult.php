<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * 
 *
 * @property int $id
 * @property string $test_number
 * @property int $course_id
 * @property int $session_id
 * @property int|null $pre_test_id
 * @property int|null $post_test_id
 * @property int $question_id
 * @property int|null $answer_id
 * @property int $user_id
 * @property string|null $answer
 * @property string|null $score
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_checked
 * @property-read \App\Models\Answer|null $answered
 * @property-read \App\Models\User|null $author
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\Test|null $postTest
 * @property-read \App\Models\Test|null $preTest
 * @property-read \App\Models\Question $question
 * @property-read \App\Models\Session $session
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult wherePostTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult wherePreTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereTestNumber($value)
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
        'course_id',
        'session_id',
        'pre_test_id',
        'post_test_id',
        'question_id',
        'answer_id',
        'answer',
        'score',
        'notes',
        'is_checked'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function user()
    // {
    //     return $this->hasManyThrough(User::class, UserCourse::class);
    // }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function preTest()
    {
        return $this->belongsTo(Test::class, 'pre_test_id');
    }

    public function postTest()
    {
        return $this->belongsTo(Test::class, 'post_test_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answered()
    {
        return $this->belongsTo(Answer::class, 'answer_id');
    }
}
