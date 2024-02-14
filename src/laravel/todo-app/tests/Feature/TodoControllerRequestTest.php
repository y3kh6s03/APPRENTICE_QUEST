<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoControllerRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_request(): void
    {
        $response = $this->get(route('todos.index'));

        $response->assertStatus(200);
    }
    public function test_post_request(): void
    {
        $response = $this->post(route('todos.create'));

        $response->assertStatus(302);
    }
}
