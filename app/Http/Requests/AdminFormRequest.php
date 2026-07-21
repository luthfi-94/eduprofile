<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }
}
