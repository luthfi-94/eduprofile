<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HandlesMediaUploads
{
    protected function storeUploadedFile(?UploadedFile $file, string $directory): ?string
    {
        if (! $file) {
            return null;
        }

        $extension = $file->getClientOriginalExtension() ?: 'bin';
        $filename = Str::uuid().'.'.$extension;

        return $file->storeAs($directory, $filename, 'public');
    }

    protected function replaceUploadedFile(?UploadedFile $file, string $directory, ?string $oldPath = null): ?string
    {
        if (! $file) {
            return $oldPath;
        }

        if ($oldPath) {
            $this->deleteStoredFile($oldPath);
        }

        return $this->storeUploadedFile($file, $directory);
    }

    protected function deleteStoredFile(?string $path): void
    {
        if ($path) {
            Storage::disk('public')->delete($path);
        }
    }
}
