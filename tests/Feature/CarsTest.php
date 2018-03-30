<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testregisterTest()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testloginrTest()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testaboutTest()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function testcontactTest()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
