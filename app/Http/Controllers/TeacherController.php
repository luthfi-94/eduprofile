<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Traits\HandlesMediaUploads;

class TeacherController extends Controller
{
    use HandlesMediaUploads;
    public function index()
    {
        $search = request('search');
        $teachers = Teacher::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('nip', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10);

        return view('admin.teachers.index', compact('teachers', 'search'));
    }

    public function create()
    {
        return view('admin.teachers.form');
    }

    public function store(StoreTeacherRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->storeUploadedFile($request->file('photo'), 'teachers');
        }

        Teacher::create($data);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher saved successfully.');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.form', compact('teacher'));
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo'] = $this->replaceUploadedFile($request->file('photo'), 'teachers', $teacher->photo);
        }

        $teacher->update($data);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $this->deleteStoredFile($teacher->photo);

        $teacher->delete();

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
