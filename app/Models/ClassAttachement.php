<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassAttachement extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'attachment',
        'url'
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
