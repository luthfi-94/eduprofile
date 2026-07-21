<?php

namespace Tests\Feature;

use App\Models\Album;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Post;
use App\Models\Profile;
use App\Models\PpdbInfo;
use App\Models\Setting;
use App\Models\Teacher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrontendPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_school_profile_page_displays_dynamic_content(): void
    {
        Setting::create([
            'school_name' => 'EduProfile School',
            'email' => 'info@example.com',
            'phone' => '08123456789',
            'address' => 'Jl. Merdeka No. 1',
        ]);

        Profile::create([
            'history' => 'Founded in 2001',
            'vision' => 'Excellent education',
            'mission' => 'Serve every learner',
            'goals' => 'Future ready',
        ]);

        $response = $this->get('/school-profile');

        $response->assertStatus(200);
        $response->assertSee('EduProfile School');
        $response->assertSee('Founded in 2001');
    }

    public function test_teachers_page_displays_teacher_data(): void
    {
        Teacher::create([
            'name' => 'Budi Santoso',
            'nip' => '12345',
            'subject' => 'Mathematics',
            'position' => 'Teacher',
            'gender' => 'male',
            'birth_place' => 'Bandung',
            'birth_date' => '1990-01-01',
            'education' => 'S1',
        ]);

        $response = $this->get('/teachers');

        $response->assertStatus(200);
        $response->assertSee('Budi Santoso');
        $response->assertSee('Mathematics');
    }

    public function test_news_page_displays_published_posts(): void
    {
        $category = Category::create(['name' => 'Academic', 'slug' => 'academic']);

        Post::create([
            'category_id' => $category->id,
            'title' => 'New Learning Program',
            'slug' => 'new-learning-program',
            'content' => 'Great news for students',
            'status' => 'published',
            'published_at' => now(),
        ]);

        $response = $this->get('/news');

        $response->assertStatus(200);
        $response->assertSee('New Learning Program');
    }

    public function test_gallery_page_displays_albums_and_detail_route(): void
    {
        $album = Album::create([
            'title' => 'Campus Day',
            'description' => 'A lovely school event',
            'cover' => 'albums/cover.jpg',
            'slug' => 'campus-day',
        ]);

        $response = $this->get('/gallery');
        $response->assertStatus(200);
        $response->assertSee('Campus Day');

        $detailResponse = $this->get('/gallery/' . $album->slug);
        $detailResponse->assertStatus(200);
        $detailResponse->assertSee('Campus Day');
    }

    public function test_ppdb_and_contact_pages_use_dynamic_data(): void
    {
        PpdbInfo::create([
            'title' => 'PPDB 2026',
            'description' => 'Open registration',
            'requirements' => 'Report card',
            'registration_open' => now()->subDay(),
            'registration_close' => now()->addDays(10),
        ]);

        Contact::create([
            'address' => 'Jl. Raya No. 12',
            'phone' => '022123456',
            'email' => 'contact@example.com',
            'google_maps' => '<iframe></iframe>',
        ]);

        $ppdbResponse = $this->get('/ppdb');
        $ppdbResponse->assertStatus(200);
        $ppdbResponse->assertSee('PPDB 2026');

        $contactResponse = $this->get('/contact');
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('Jl. Raya No. 12');
    }
}
