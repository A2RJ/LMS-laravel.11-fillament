<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $sumbawa
 * @property string $indonesia
 * @property string $inggris
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereIndonesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereInggris($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereSumbawa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereUserId($value)
 * @mixin \Eloquent
 */
class Vocabulary extends Model
{
    use HasFactory;
}
