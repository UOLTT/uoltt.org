<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGenericPages()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Welcome, to the LTT Conglomerate website');

        $this->get('/faq')
            ->assertStatus(200)
            ->assertSee('Frequently Asked Questions');

        $this->get('/intel')
            ->assertStatus(200)
            ->assertSee('Intelligence System');
    }
}
