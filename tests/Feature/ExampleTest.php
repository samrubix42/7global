<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_home2_returns_a_successful_response(): void
    {
        $response = $this->get('/home2');

        $response->assertStatus(200);
        $response->assertSee('A DELICATE TOUCH');
        $response->assertSee('Flatwork Ironers');
    }
}
