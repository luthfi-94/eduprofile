<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->get();

        return view('admin.profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.profiles.form');
    }

    public function store(StoreProfileRequest $request)
    {
        Profile::create($request->validated());

        return redirect()->route('admin.profiles.index')->with('success', 'School profile saved successfully.');
    }

    public function edit(Profile $profile)
    {
        return view('admin.profiles.form', compact('profile'));
    }

    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $profile->update($request->validated());

        return redirect()->route('admin.profiles.index')->with('success', 'School profile updated successfully.');
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('admin.profiles.index')->with('success', 'School profile deleted successfully.');
    }
}
