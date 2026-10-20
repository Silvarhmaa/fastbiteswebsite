<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FastBitesDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login_instead_of_selecting_a_role(): void
    {
        $this->get('/?role=admin')->assertRedirect(route('login'));
        $this->get(route('dashboard.admin'))->assertRedirect(route('login'));
    }

    public function test_consumer_is_redirected_to_the_consumer_dashboard(): void
    {
        $user = User::factory()->create(['role' => 'consumer']);

        $this->actingAs($user)
            ->get(route('dashboard'))
            ->assertRedirect(route('dashboard.consumer'));

        $this->actingAs($user)
            ->get(route('dashboard.consumer'))
            ->assertOk()
            ->assertSee('Jelajahi makanan')
            ->assertSee('Bento Ayam Teriyaki')
            ->assertSee($user->name);
    }

    public function test_seller_dashboard_requires_a_seller_account(): void
    {
        $seller = User::factory()->create(['role' => 'seller']);
        $consumer = User::factory()->create(['role' => 'consumer']);

        $this->actingAs($seller)
            ->get(route('dashboard.seller'))
            ->assertOk()
            ->assertSee('Dashboard usaha')
            ->assertSee('Produk surplus kamu');

        $this->actingAs($consumer)
            ->get(route('dashboard.seller'))
            ->assertForbidden();
    }

    public function test_admin_dashboard_requires_an_admin_account(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $seller = User::factory()->create(['role' => 'seller']);

        $this->actingAs($admin)
            ->get(route('dashboard.admin'))
            ->assertOk()
            ->assertSee('Dashboard admin')
            ->assertSee('Pengajuan verifikasi usaha')
            ->assertSee('Kedai Rasa Kita')
            ->assertSee('Setujui');

        $this->actingAs($seller)
            ->get(route('dashboard.admin'))
            ->assertForbidden();
    }

    public function test_registration_creates_a_consumer_and_logs_them_in(): void
    {
        $this->post(route('register.store'), [
            'name' => 'Rani Konsumen',
            'email' => 'rani@example.test',
            'role' => 'consumer',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ])->assertRedirect(route('dashboard.consumer'));

        $this->assertDatabaseHas('users', [
            'email' => 'rani@example.test',
            'role' => 'consumer',
        ]);
        $this->assertAuthenticated();
    }

    public function test_registration_can_create_a_seller_account(): void
    {
        $this->post(route('register.store'), [
            'name' => 'Pemilik Usaha',
            'email' => 'seller@example.test',
            'role' => 'seller',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ])->assertRedirect(route('dashboard.seller'));

        $this->assertDatabaseHas('users', [
            'email' => 'seller@example.test',
            'role' => 'seller',
        ]);
    }

    public function test_public_registration_cannot_assign_admin_role(): void
    {
        $this->from(route('register'))
            ->post(route('register.store'), [
                'name' => 'Admin Palsu',
                'email' => 'admin@example.test',
                'role' => 'admin',
                'password' => 'rahasia123',
                'password_confirmation' => 'rahasia123',
            ])
            ->assertRedirect(route('register'))
            ->assertSessionHasErrors('role');

        $this->assertDatabaseMissing('users', ['email' => 'admin@example.test']);
    }

    public function test_user_can_log_in_and_log_out(): void
    {
        $user = User::factory()->create([
            'email' => 'seller@example.test',
            'password' => bcrypt('rahasia123'),
            'role' => 'seller',
        ]);

        $this->post(route('login.store'), [
            'email' => $user->email,
            'password' => 'rahasia123',
        ])->assertRedirect(route('dashboard.seller'));

        $this->assertAuthenticatedAs($user);

        $this->post(route('logout'))
            ->assertRedirect(route('login'));

        $this->assertGuest();
    }

    public function test_login_rejects_invalid_credentials(): void
    {
        $this->post(route('login.store'), [
            'email' => 'unknown@example.test',
            'password' => 'wrong-password',
        ])->assertSessionHasErrors('email');

        $this->assertGuest();
    }
}
