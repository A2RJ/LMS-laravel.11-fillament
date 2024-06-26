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
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $content
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $postTest
 * @property-read int|null $post_test_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $preTest
 * @property-read int|null $pre_test_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Test newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Test query()
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Test withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $result
 * @property-read int|null $result_count
 * @property string $duration
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $postTestResult
 * @property-read int|null $post_test_result_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $preTestResult
 * @property-read int|null $pre_test_result_count
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereDuration($value)
 * @mixin \Eloquent
 */
class Test extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'duration',
    ];

    protected function content(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => preg_replace("/(\.\.\/)+storage/", "/storage", $value)
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function preTest()
    {
        return $this->hasMany(Session::class, 'pre_test_id');
    }

    public function postTest()
    {
        return $this->hasMany(Session::class, 'post_test_id');
    }

    public function preTestResult()
    {
        return $this->hasMany(TestResult::class, 'pre_test_id');
    }

    public function postTestResult()
    {
        return $this->hasMany(TestResult::class, 'post_test_id');
    }

    public function result()
    {
        return $this->hasMany(TestResult::class);
    }
}
