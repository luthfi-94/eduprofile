<?php

namespace App\Http\Requests;

class UpdateCategoryRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150', 'unique:categories,name,' . $this->route('category')->id],
        ];
    }
}
