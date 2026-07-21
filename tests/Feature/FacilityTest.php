<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FacilityTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_facilities_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/facilities');

        $response->assertOk();
        $response->assertSee('Facilities');
    }

    public function test_admin_can_create_facility_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/facilities', [
            'name' => 'Laboratorium Komputer',
            'description' => 'Fasilitas belajar digital.',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('facilities', [
            'name' => 'Laboratorium Komputer',
        ]);
    }
}
