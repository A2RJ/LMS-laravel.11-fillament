<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'attachment'
    ];

    protected $casts = [
        'attachment' => 'array',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

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
}
