<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $thumbnail
 * @property string $progress
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ClassAttachement> $attachments
 * @property-read int|null $attachments_count
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $sessions
 * @property-read int|null $sessions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassRoom withoutTrashed()
 * @mixin \Eloquent
 */
class ClassRoom extends Model
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
