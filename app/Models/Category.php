<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public static function booted(): void
    {
        static::creating(function (Category $category) {
            $category->slug = $category->slug ?: Str::slug($category->name);
        });

        static::updating(function (Category $category) {
            if (! $category->slug || $category->isDirty('name')) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
}
