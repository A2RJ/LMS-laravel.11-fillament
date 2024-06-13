<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $course_id
 * @property string $attachment
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereUrl($value)
 * @mixin \Eloquent
 */
class CourseAttachement extends Model
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
