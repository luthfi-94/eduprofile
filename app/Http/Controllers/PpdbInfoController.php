<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePpdbInfoRequest;
use App\Http\Requests\UpdatePpdbInfoRequest;
use App\Models\PpdbInfo;

class PpdbInfoController extends Controller
{
    public function index()
    {
        $ppdbInfos = PpdbInfo::latest()->paginate(10);

        return view('admin.ppdb_infos.index', compact('ppdbInfos'));
    }

    public function create()
    {
        return view('admin.ppdb_infos.form');
    }

    public function store(StorePpdbInfoRequest $request)
    {
        PpdbInfo::create($request->validated());

        return redirect()->route('admin.ppdb_infos.index')->with('success', 'PPDB information saved successfully.');
    }

    public function edit(PpdbInfo $ppdbInfo)
    {
        return view('admin.ppdb_infos.form', compact('ppdbInfo'));
    }

    public function update(UpdatePpdbInfoRequest $request, PpdbInfo $ppdbInfo)
    {
        $ppdbInfo->update($request->validated());

        return redirect()->route('admin.ppdb_infos.index')->with('success', 'PPDB information updated successfully.');
    }

    public function destroy(PpdbInfo $ppdbInfo)
    {
        $ppdbInfo->delete();

        return redirect()->route('admin.ppdb_infos.index')->with('success', 'PPDB information deleted successfully.');
    }
}
