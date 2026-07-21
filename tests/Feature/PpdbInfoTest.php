<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PpdbInfoTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_ppdb_infos_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/ppdb_infos');

        $response->assertOk();
        $response->assertSee('PPDB');
    }

    public function test_admin_can_create_ppdb_info_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/ppdb_infos', [
            'title' => 'PPDB 2026',
            'description' => '<p>Informasi PPDB</p>',
            'requirements' => '<p>Ijazah dan foto</p>',
            'registration_open' => '2026-06-01',
            'registration_close' => '2026-07-31',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('ppdb_infos', [
            'title' => 'PPDB 2026',
        ]);
    }
}
