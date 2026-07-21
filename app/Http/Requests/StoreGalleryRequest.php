<?php

namespace App\Http\Requests;

class StoreGalleryRequest extends AdminFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'album_id' => ['required', 'exists:albums,id'],
            'title' => ['required', 'string', 'max:150', 'unique:galleries,title'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ];
    }
}
