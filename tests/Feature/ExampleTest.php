<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNoexistentEndpointReturns404() {
        $response = $this -> get('/contacts');
        $response -> assertStatus(404);
    }

    public function testHomepageContainsProjectName() {
        $response = $this -> get('/');
        $response -> assertSeeText('Laravel');
    }
}
