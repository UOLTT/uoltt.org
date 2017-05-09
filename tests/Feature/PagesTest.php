<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
            ->assertSee("Welcome, to the LTT Conglomerate website");

        $this->get('/faq')
            ->assertStatus(200)
            ->assertSee("Frequently Asked Questions");

        $this->get('/intel')
            ->assertStatus(200)
            ->assertSee("Intelligence System");
    }
}
