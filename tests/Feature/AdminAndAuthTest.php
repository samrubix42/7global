<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class AdminAndAuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_page_renders_successfully(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee('Welcome back');
        $response->assertSee('admin@7global.com');
    }

    public function test_admin_dashboard_renders_successfully(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@7global.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );

        $response = $this->actingAs($user)->get('/admin');

        $response->assertStatus(200);
        $response->assertSee('Dashboard');
        $response->assertSee('7A Global');
    }

    public function test_admin_dashboard_requires_authentication(): void
    {
        $response = $this->get('/admin');

        $response->assertRedirect('/login');
    }

    public function test_login_component_works_with_credentials(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@7global.com'],
            ['name' => 'Admin User', 'password' => bcrypt('password')]
        );

        Livewire::test('auth::login')
            ->set('email', 'admin@7global.com')
            ->set('password', 'password')
            ->call('login')
            ->assertHasNoErrors()
            ->assertRedirect('/admin');

        $this->assertAuthenticatedAs($user);
    }
}
