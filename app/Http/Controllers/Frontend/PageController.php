<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Post;
use App\Models\Profile;
use App\Models\PpdbInfo;
use App\Models\Setting;
use App\Models\Teacher;

class PageController extends Controller
{
    public function schoolProfile()
    {
        $setting = Setting::latest()->first();
        $profile = Profile::latest()->first();

        return view('frontend.school-profile', compact('setting', 'profile'));
    }

    public function principal()
    {
        $setting = Setting::latest()->first();
        $profile = Profile::latest()->first();

        return view('frontend.principal', compact('setting', 'profile'));
    }

    public function teachers()
    {
        $teachers = Teacher::latest()->get();
        $setting = Setting::latest()->first();

        return view('frontend.teachers', compact('teachers', 'setting'));
    }

    public function facilities()
    {
        $facilities = Facility::latest()->get();
        $setting = Setting::latest()->first();

        return view('frontend.facilities', compact('facilities', 'setting'));
    }

    public function news()
    {
        $posts = Post::with('category')->where('status', 'published')->latest()->paginate(6);
        $setting = Setting::latest()->first();

        return view('frontend.news', compact('posts', 'setting'));
    }

    public function showNews(Post $post)
    {
        $post->load('category');
        $setting = Setting::latest()->first();

        return view('frontend.news-show', compact('post', 'setting'));
    }

    public function gallery()
    {
        $albums = Album::latest()->get();
        $setting = Setting::latest()->first();

        return view('frontend.gallery', compact('albums', 'setting'));
    }

    public function showGallery(Album $album)
    {
        $album->load('galleries');
        $setting = Setting::latest()->first();

        return view('frontend.gallery-show', compact('album', 'setting'));
    }

    public function ppdb()
    {
        $ppdbInfo = PpdbInfo::latest()->first();
        $setting = Setting::latest()->first();

        return view('frontend.ppdb', compact('ppdbInfo', 'setting'));
    }

    public function contact()
    {
        $contact = Contact::latest()->first();
        $setting = Setting::latest()->first();

        return view('frontend.contact', compact('contact', 'setting'));
    }
}
