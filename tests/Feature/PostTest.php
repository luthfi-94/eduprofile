<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_posts_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/posts');

        $response->assertOk();
        $response->assertSee('Posts');
    }

    public function test_admin_can_create_post_record(): void
    {
        $user = User::factory()->create();
        $category = Category::create(['name' => 'Berita', 'slug' => 'berita']);

        $response = $this->actingAs($user)->post('/admin/posts', [
            'category_id' => $category->id,
            'title' => 'Penerimaan Siswa Baru',
            'content' => '<p>Konten berita</p>',
            'status' => 'published',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('posts', [
            'title' => 'Penerimaan Siswa Baru',
            'slug' => 'penerimaan-siswa-baru',
        ]);
    }
}
