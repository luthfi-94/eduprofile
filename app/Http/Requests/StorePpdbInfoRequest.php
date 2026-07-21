<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePpdbInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:150'],
            'description' => ['nullable', 'string'],
            'requirements' => ['nullable', 'string'],
            'registration_open' => ['nullable', 'date'],
            'registration_close' => ['nullable', 'date', 'after_or_equal:registration_open'],
        ];
    }
}
