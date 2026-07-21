<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }
}
