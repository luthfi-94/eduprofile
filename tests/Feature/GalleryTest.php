<?php

namespace Tests\Feature;

use App\Models\Album;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class GalleryTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_galleries_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/galleries');

        $response->assertOk();
        $response->assertSee('Galleries');
    }

    public function test_admin_can_create_gallery_record(): void
    {
        $user = User::factory()->create();
        $album = Album::create(['title' => 'Kegiatan Sekolah']);

        $response = $this->actingAs($user)->post('/admin/galleries', [
            'album_id' => $album->id,
            'title' => 'Foto Kegiatan',
            'image' => UploadedFile::fake()->createWithContent(
                'gallery.png',
                base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQABAA4gS8QAAAAASUVORK5CYII='),
                'image/png'
            ),
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('galleries', [
            'title' => 'Foto Kegiatan',
        ]);
    }
}
