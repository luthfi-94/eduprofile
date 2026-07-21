<?php

namespace App\Http\Requests;

class StoreProfileRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'history' => ['nullable', 'string'],
            'vision' => ['nullable', 'string'],
            'mission' => ['nullable', 'string'],
            'goals' => ['nullable', 'string'],
        ];
    }
}
