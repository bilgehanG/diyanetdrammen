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
        $token = config('app.dev_preview_token');
        $landingRoute = (string) config('app.landing_page_route', '/no/test');

        $response = $this->get($landingRoute.'?token='.$token);

        $response->assertStatus(200);
    }
}
