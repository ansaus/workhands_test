<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $thumbnail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $likes_count
 * @property int $views_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article latestFirst()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLikesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'thumbnail'];

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
