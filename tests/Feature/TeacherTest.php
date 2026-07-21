<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeacherTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_teachers_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/teachers');

        $response->assertOk();
        $response->assertSee('Teachers');
    }

    public function test_admin_can_create_teacher_record(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/teachers', [
            'nip' => '1234567890',
            'name' => 'Budi Santoso',
            'gender' => 'Male',
            'birth_place' => 'Bandar Lampung',
            'birth_date' => '1990-01-01',
            'education' => 'S1 Pendidikan',
            'position' => 'Guru Kelas',
            'subject' => 'Matematika',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('teachers', [
            'nip' => '1234567890',
        ]);
    }
}
