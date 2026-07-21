<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SettingTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_settings_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/settings');

        $response->assertOk();
        $response->assertSee('Website Settings');
    }

    public function test_admin_can_create_settings_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/settings', [
            'school_name' => 'UPTD SDN 7 WAY LIMA',
            'email' => 'info@eduprofile.sch.id',
            'phone' => '081234567890',
            'address' => 'Way Lima, Bandar Lampung',
            'footer_text' => '© 2026 EduProfile',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('settings', [
            'school_name' => 'UPTD SDN 7 WAY LIMA',
        ]);
    }
}
