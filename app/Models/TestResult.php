<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function user()
    {
        return $this->hasManyThrough(User::class, UserCourse::class);
    }

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
