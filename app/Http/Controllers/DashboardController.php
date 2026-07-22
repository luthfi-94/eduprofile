<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\PpdbInfo;
use App\Models\Profile;
use App\Models\Setting;
use App\Models\Teacher;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [

            'teacherCount'   => Teacher::count(),
            'postCount'      => Post::count(),
            'facilityCount'  => Facility::count(),
            'categoryCount'  => Category::count(),
            'albumCount'     => Album::count(),
            'galleryCount'   => Gallery::count(),

            'profileCount'   => Profile::count(),
            'settingCount'   => Setting::count(),
            'contactCount'   => Contact::count(),
            'ppdbCount'      => PpdbInfo::count(),

            'latestPosts'    => Post::latest()->take(5)->get(),
            'latestTeachers' => Teacher::latest()->take(5)->get(),
            'latestAlbums'   => Album::latest()->take(5)->get(),
        ]);
    }
}