<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * Test that the homepage loads successfully.
     */
    public function test_homepage_loads_successfully()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Afghanistan Tourism');
        $response->assertSee('Discover the Beauty of Afghanistan');
    }
}