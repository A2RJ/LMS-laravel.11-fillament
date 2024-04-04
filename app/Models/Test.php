<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question',
        'answer_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function preTest()
    {
        return $this->hasMany(Session::class, 'pre_test_id');
    }

    public function postTest()
    {
        return $this->hasMany(Session::class, 'post_test_id');
    }
}
