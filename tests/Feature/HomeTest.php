<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
