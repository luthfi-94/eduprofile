<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Models\Album;
use App\Traits\HandlesMediaUploads;

class AlbumController extends Controller
{
    use HandlesMediaUploads;
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
            $data['cover'] = $this->storeUploadedFile($request->file('cover'), 'albums');
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
            $data['cover'] = $this->replaceUploadedFile($request->file('cover'), 'albums', $album->cover);
        }

        $album->update($data);

        return redirect()->route('admin.albums.index')->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        $this->deleteStoredFile($album->cover);

        $album->delete();

        return redirect()->route('admin.albums.index')->with('success', 'Album deleted successfully.');
    }
}
