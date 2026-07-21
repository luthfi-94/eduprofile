<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'school_name',
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'youtube',
        'google_maps',
        'footer_text',
    ];
}
