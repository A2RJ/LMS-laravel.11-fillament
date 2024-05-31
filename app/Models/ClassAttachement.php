<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $class_room_id
 * @property string $attachment
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ClassRoom $classRoom
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereClassRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassAttachement whereUrl($value)
 * @mixin \Eloquent
 */
class ClassAttachement extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_id',
        'attachment',
        'url'
    ];

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
