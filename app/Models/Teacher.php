<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'nip',
        'name',
        'gender',
        'birth_place',
        'birth_date',
        'education',
        'position',
        'subject',
        'photo',
    ];
}
