<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'thumbnail',
        'progress',
        'content'
    ];

    // protected function thumbnail(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) => "/storage/$value"
    //     );
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attachments()
    {
        return $this->hasMany(ClassAttachement::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
}
