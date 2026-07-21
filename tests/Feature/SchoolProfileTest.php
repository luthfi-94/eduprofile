<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SchoolProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_school_profile_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/profiles');

        $response->assertOk();
        $response->assertSee('School Profile');
    }

    public function test_admin_can_create_school_profile_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/profiles', [
            'history' => '<p>Founded in 1990.</p>',
            'vision' => '<p>To become a leading school.</p>',
            'mission' => '<p>To provide quality education.</p>',
            'goals' => '<p>To produce excellent students.</p>',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('profiles', [
            'history' => '<p>Founded in 1990.</p>',
        ]);
    }
}
