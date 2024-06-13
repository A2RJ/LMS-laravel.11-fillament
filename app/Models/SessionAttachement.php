<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $course_session_id
 * @property string $attachment
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Session|null $Session
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereCourseSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereUrl($value)
 * @mixin \Eloquent
 */
class SessionAttachement extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_session_id',
        'attachment',
        'url'
    ];

    public function Session()
    {
        return $this->belongsTo(Session::class);
    }
}
