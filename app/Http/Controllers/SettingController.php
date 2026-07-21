<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use App\Traits\HandlesMediaUploads;

class SettingController extends Controller
{
    use HandlesMediaUploads;
    public function index()
    {
        $setting = Setting::first();

        return view('admin.settings.index', compact('setting'));
    }

    public function create()
    {
        $setting = Setting::first();

        return view('admin.settings.form', compact('setting'));
    }

    public function store(StoreSettingRequest $request)
    {
        $data = $this->prepareData($request);
        $setting = Setting::create($data);

        return redirect()->route('admin.settings.index')->with('success', 'Website settings saved successfully.');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.form', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $data = $this->prepareData($request, $setting);
        $setting->update($data);

        return redirect()->route('admin.settings.index')->with('success', 'Website settings updated successfully.');
    }

    public function destroy(Setting $setting)
    {
        $this->deleteStoredFile($setting->logo);
        $this->deleteStoredFile($setting->favicon);

        $setting->delete();

        return redirect()->route('admin.settings.index')->with('success', 'Website settings deleted successfully.');
    }

    protected function prepareData(StoreSettingRequest|UpdateSettingRequest $request, ?Setting $setting = null): array
    {
        $data = $request->validated();

        foreach (['logo', 'favicon'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $this->replaceUploadedFile($request->file($field), 'settings', $setting?->$field);
            }
        }

        return $data;
    }
}
