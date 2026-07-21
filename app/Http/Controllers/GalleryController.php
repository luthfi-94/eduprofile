<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Album;
use App\Models\Gallery;
use App\Traits\HandlesMediaUploads;

class GalleryController extends Controller
{
    use HandlesMediaUploads;
    public function index()
    {
        $search = request('search');
        $galleries = Gallery::query()
            ->with('album')
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%")
                    ->orWhereHas('album', function ($albumQuery) use ($search) {
                        $albumQuery->where('title', 'like', "%{$search}%");
                    });
            })
            ->latest()
            ->paginate(9);

        return view('admin.galleries.index', compact('galleries', 'search'));
    }

    public function create()
    {
        $albums = Album::orderBy('title')->get();

        return view('admin.galleries.form', compact('albums'));
    }

    public function store(StoreGalleryRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeUploadedFile($request->file('image'), 'galleries');
        }

        Gallery::create($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item saved successfully.');
    }

    public function edit(Gallery $gallery)
    {
        $albums = Album::orderBy('title')->get();

        return view('admin.galleries.form', compact('gallery', 'albums'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $this->replaceUploadedFile($request->file('image'), 'galleries', $gallery->image);
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $this->deleteStoredFile($gallery->image);

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item deleted successfully.');
    }
}
