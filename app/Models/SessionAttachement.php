<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionAttachement extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'attachment',
        'url'
    ];

    public function Session()
    {
        return $this->belongsTo(Session::class);
    }
}
