<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_categories_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/categories');

        $response->assertOk();
        $response->assertSee('Categories');
    }

    public function test_admin_can_create_category_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/categories', [
            'name' => 'Berita Sekolah',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('categories', [
            'name' => 'Berita Sekolah',
            'slug' => 'berita-sekolah',
        ]);
    }
}
