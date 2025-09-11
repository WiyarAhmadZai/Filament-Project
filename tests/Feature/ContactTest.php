<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Contact Us');
        $response->assertSee('mrwiyarahmadzai@gmail.com');
        $response->assertSee('+93 776 992 603');
    }

    public function test_contact_page_contains_social_links(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('fab fa-facebook-f');
        $response->assertSee('fab fa-twitter');
        $response->assertSee('fab fa-instagram');
        $response->assertSee('fab fa-youtube');
    }

    public function test_contact_page_contains_faq_section(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Frequently Asked Questions');
        $response->assertSee('How do I book a tour guide?');
        $response->assertSee('What payment methods do you accept?');
    }
}