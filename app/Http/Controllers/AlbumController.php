<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->paginate(9);

        return view('admin.albums.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.albums.form');
    }

    public function store(StoreAlbumRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('albums', 'public');
        }

        Album::create($data);

        return redirect()->route('admin.albums.index')->with('success', 'Album saved successfully.');
    }

    public function edit(Album $album)
    {
        return view('admin.albums.form', compact('album'));
    }

    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $data = $request->validated();

        if ($request->hasFile('cover')) {
            if ($album->cover) {
                Storage::disk('public')->delete($album->cover);
            }
            $data['cover'] = $request->file('cover')->store('albums', 'public');
        }

        $album->update($data);

        return redirect()->route('admin.albums.index')->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        if ($album->cover) {
            Storage::disk('public')->delete($album->cover);
        }

        $album->delete();

        return redirect()->route('admin.albums.index')->with('success', 'Album deleted successfully.');
    }
}
