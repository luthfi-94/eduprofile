<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_contacts_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/contacts');

        $response->assertOk();
        $response->assertSee('Contacts');
    }

    public function test_admin_can_create_contact_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/contacts', [
            'address' => 'Jl. Pendidikan No. 1',
            'phone' => '08123456789',
            'email' => 'info@sekolah.test',
            'google_maps' => '<iframe src="https://maps.google.com"></iframe>',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', [
            'email' => 'info@sekolah.test',
        ]);
    }
}
