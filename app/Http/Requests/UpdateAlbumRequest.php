<?php

namespace App\Http\Requests;

class UpdateAlbumRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:150', 'unique:albums,title,' . $this->route('album')->id],
            'description' => ['nullable', 'string', 'max:1000'],
            'cover' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }
}
