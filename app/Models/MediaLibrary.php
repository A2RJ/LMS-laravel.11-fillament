<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $user_id
 * @property string $filename
 * @property string $attachment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereUserId($value)
 * @mixin \Eloquent
 */
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
}
