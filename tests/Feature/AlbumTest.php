<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AlbumTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_albums_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/albums');

        $response->assertOk();
        $response->assertSee('Albums');
    }

    public function test_admin_can_create_album_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/albums', [
            'title' => 'Kegiatan Sekolah',
            'description' => 'Dokumentasi kegiatan sekolah',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('albums', [
            'title' => 'Kegiatan Sekolah',
        ]);
    }
}
