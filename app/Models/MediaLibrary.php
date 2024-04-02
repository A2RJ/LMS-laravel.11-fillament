<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaLibrary extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'filename',
        'attachment'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    protected $hidden = [
        'user_id',
    ];
}
