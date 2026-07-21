<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
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
        if ($setting->logo) {
            Storage::disk('public')->delete($setting->logo);
        }

        if ($setting->favicon) {
            Storage::disk('public')->delete($setting->favicon);
        }

        $setting->delete();

        return redirect()->route('admin.settings.index')->with('success', 'Website settings deleted successfully.');
    }

    protected function prepareData(StoreSettingRequest|UpdateSettingRequest $request, ?Setting $setting = null): array
    {
        $data = $request->validated();

        foreach (['logo', 'favicon'] as $field) {
            if ($request->hasFile($field)) {
                if ($setting?->$field) {
                    Storage::disk('public')->delete($setting->$field);
                }

                $data[$field] = $request->file($field)->store('settings', 'public');
            }
        }

        return $data;
    }
}
