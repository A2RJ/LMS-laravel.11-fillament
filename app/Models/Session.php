<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'course_sessions';

    protected $fillable = [
        'course_id',
        'pre_test_id',
        'post_test_id',
        'title',
        'content',
        'start',
        'end'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function preTest()
    {
        return $this->belongsTo(Test::class, 'pre_test_id');
    }

    public function postTest()
    {
        return $this->belongsTo(Test::class, 'post_test_id');
    }

    public function testResult()
    {
        return $this->hasMany(TestResult::class, 'session_id');
    }

    public function attachments()
    {
        return $this->hasMany(SessionAttachement::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
