<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Album extends Model
{
    protected $fillable = [
        'title',
        'description',
        'cover',
        'slug',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public static function booted(): void
    {
        static::creating(function (Album $album) {
            $album->slug = $album->slug ?: Str::slug($album->title);
        });

        static::updating(function (Album $album) {
            if (! $album->slug || $album->isDirty('title')) {
                $album->slug = Str::slug($album->title);
            }
        });
    }
}
