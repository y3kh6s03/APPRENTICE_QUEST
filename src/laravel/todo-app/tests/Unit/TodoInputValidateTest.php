<?php

namespace Tests\Unit;

use Tests\TestCase;


class TodoInputValidateTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_title_input_empty_valid(): void
    {
        $type = [
            'title' => '',
        ];
        $response = $this->post(route('todos.store', $type));
        $response->assertStatus(302);
    }

    public function test_title_input_valid(): void
    {
        $type = [
            'title' => 'test',
        ];
        $response = $this->post(route('todos.store', $type));
        $response->assertStatus(302);
    }
}
