<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
        'published_at',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function booted(): void
    {
        static::creating(function (Post $post) {
            $post->slug = $post->slug ?: Str::slug($post->title);
        });

        static::updating(function (Post $post) {
            if (! $post->slug || $post->isDirty('title')) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}
