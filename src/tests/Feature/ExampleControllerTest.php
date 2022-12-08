<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/example');

        $response
            ->assertStatus(200)
            ->assertJson([
                'name' => "John",
                'state' => "TX",
            ]);
    }
}
