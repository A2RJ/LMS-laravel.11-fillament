<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAttachement extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'attachment',
        'url'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
