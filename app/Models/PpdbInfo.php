<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbInfo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'requirements',
        'registration_open',
        'registration_close',
    ];

    protected $casts = [
        'registration_open' => 'date',
        'registration_close' => 'date',
    ];
}
