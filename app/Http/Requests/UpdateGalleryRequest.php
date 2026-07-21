<?php

namespace App\Http\Requests;

class UpdateGalleryRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'album_id' => ['required', 'exists:albums,id'],
            'title' => ['required', 'string', 'max:150', 'unique:galleries,title,' . $this->route('gallery')->id],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }
}
