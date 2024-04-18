<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'start',
        'end'
    ];

    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => preg_replace("/(\.\.\/)+storage/", "/storage", $value)
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
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
