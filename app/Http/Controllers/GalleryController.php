<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
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
            $data['image'] = $request->file('image')->store('galleries', 'public');
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
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $data['image'] = $request->file('image')->store('galleries', 'public');
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery item deleted successfully.');
    }
}
