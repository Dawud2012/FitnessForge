<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_return_all_users()
    {
        // Assuming you have test data setup, or you can create using factories
        $user = User::factory()->create();

        $response = $this->get('/users');

        $response->assertStatus(200)
                 ->assertSee($user->name); // Assuming you are displaying user names in your view
    }

    /** @test */
    public function it_can_show_profile()
    {
        $user = User::factory()->create();

        $response = $this->get("/users/{$user->id}");

        $response->assertStatus(200)
                 ->assertSee($user->name); // Assuming you are displaying user name in the profile view
    }

    // Add more test methods for other controller actions...

}
