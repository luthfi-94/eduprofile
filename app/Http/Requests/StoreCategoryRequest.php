<?php

namespace App\Http\Requests;

class StoreCategoryRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', 'unique:categories,name'],
        ];
    }
}
