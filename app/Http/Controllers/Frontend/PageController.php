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
// use App\Models\Gallery;

class PageController extends Controller
{
    public function home()
{
    $data = $this->sharedData();

    $data['teachers'] = Teacher::latest()->take(4)->get();
    $data['facilities'] = Facility::latest()->take(3)->get();
    $data['posts'] = Post::where('status', 'published')
                        ->latest()
                        ->take(3)
                        ->get();
    $data['albums'] = Album::latest()->take(6)->get();
    $data['ppdbInfo'] = PpdbInfo::latest()->first();
    $data['contact'] = Contact::latest()->first();

    return view('frontend.home', $data);
}

    protected function sharedData(): array
    {
        return [
            'setting' => Setting::latest()->first(),
            'profile' => Profile::latest()->first(),
        ];
    }

    public function schoolProfile()
    {
        $data = $this->sharedData();

        return view('frontend.school-profile', $data);
    }

    public function principal()
    {
        $data = $this->sharedData();

        return view('frontend.principal', $data);
    }

    public function teachers()
    {
        $data = $this->sharedData();
        $data['teachers'] = Teacher::latest()->get();

        return view('frontend.teachers', $data);
    }

    public function facilities()
    {
        $data = $this->sharedData();
        $data['facilities'] = Facility::latest()->get();

        return view('frontend.facilities', $data);
    }

    public function news()
    {
        $data = $this->sharedData();
        $data['posts'] = Post::with('category')->where('status', 'published')->latest()->paginate(6);

        return view('frontend.news', $data);
    }

    public function showNews(Post $post)
    {
        $data = $this->sharedData();
        $post->load('category');
        $data['post'] = $post;

        return view('frontend.news-show', $data);
    }

    public function gallery()
    {
        $data = $this->sharedData();
        $data['albums'] = Album::latest()->get();

        return view('frontend.gallery', $data);
    }

    public function showGallery(Album $album)
    {
        $data = $this->sharedData();
        $album->load('galleries');
        $data['album'] = $album;

        return view('frontend.gallery-show', $data);
    }

    public function ppdb()
    {
        $data = $this->sharedData();
        $data['ppdbInfo'] = PpdbInfo::latest()->first();

        return view('frontend.ppdb', $data);
    }

    public function contact()
    {
        $data = $this->sharedData();
        $data['contact'] = Contact::latest()->first();

        return view('frontend.contact', $data);
    }
}
