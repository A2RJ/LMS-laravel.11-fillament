<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 *
 * @property int $id
 * @property int $course_id
 * @property int|null $pre_test_id
 * @property int|null $post_test_id
 * @property string $title
 * @property string $content
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SessionAttachement> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendances
 * @property-read int|null $attendances_count
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\Test|null $postTest
 * @property-read \App\Models\Test|null $preTest
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $testResult
 * @property-read int|null $test_result_count
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session wherePostTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session wherePreTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Session withoutTrashed()
 * @mixin \Eloquent
 */
class Session extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'course_sessions';

    protected $fillable = [
        'course_id',
        'pre_test_id',
        'post_test_id',
        'title',
        'content',
        'start',
        'end'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function preTest()
    {
        return $this->belongsTo(Test::class, 'pre_test_id');
    }

    public function postTest()
    {
        return $this->belongsTo(Test::class, 'post_test_id');
    }

    public function testResult()
    {
        return $this->hasMany(TestResult::class, 'session_id');
    }

    public function attachments()
    {
        return $this->hasMany(SessionAttachement::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
