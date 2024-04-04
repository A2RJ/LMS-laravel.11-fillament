<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pre_test_id',
        'post_test_id',
        'title',
        'content',
        'start',
        'end'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function preTest()
    {
        return $this->belongsTo(Test::class);
    }

    public function postTest()
    {
        return $this->belongsTo(Test::class);
    }

    public function preTestResult()
    {
        return $this->hasMany(TestResult::class, 'id', 'pre_test_id');
    }

    public function postTestResult()
    {
        return $this->hasMany(TestResult::class, 'id', 'post_test_id');
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
