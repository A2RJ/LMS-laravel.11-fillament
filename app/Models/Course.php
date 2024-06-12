<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'thumbnail',
        'progress',
        'content',
        'category_id'
    ];

    // protected function thumbnail(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) => "/storage/$value"
    //     );
    // }

    public function users()
    {
        return $this->hasManyThrough(
            User::class, // Model tujuan akhir
            UserCourse::class, // Model perantara
            'course_id', // Foreign key pada tabel perantara yang mengacu ke tabel utama (courses)
            'id', // Primary key pada tabel tujuan akhir (users)
            'id', // Primary key pada tabel utama (courses)
            'user_id' // Foreign key pada tabel perantara yang mengacu ke tabel tujuan akhir (users)
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function attachments()
    {
        return $this->hasMany(ClassAttachement::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
