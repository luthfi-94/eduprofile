<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PpdbInfoController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('settings', SettingController::class)->except(['show']);
    Route::resource('profiles', AdminProfileController::class)->except(['show']);
    Route::resource('teachers', TeacherController::class)->except(['show']);
    Route::resource('facilities', FacilityController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('posts', PostController::class)->except(['show']);
    Route::resource('albums', AlbumController::class)->except(['show']);
    Route::resource('galleries', GalleryController::class)->except(['show']);
    Route::resource('ppdb_infos', PpdbInfoController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
