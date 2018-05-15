<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class midlewaresTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/productos/');
    //     $response->assertStatus(302);
    //
    // }

    public function testExample()
    {
        $response = $this->get('/users');
        $response->assertStatus(302);
    }

    public function testloginadmin(){
      $response = $this->call('GET', '/login', [
        'email' => 'administrador@gmail.com',
        'password' => '123456',
        '_token' => csrf_token()
      ]);
      $this->assertEquals(200, $response->getStatusCode());
      $this->assertEquals('auth.login', $response->original->name());
    }
    public function testloginuser(){
      $response = $this->call('GET', '/login', [
        'email' => 'user@gmail.com',
        'password' => '123456',
        '_token' => csrf_token()
      ]);
      $this->assertEquals(200, $response->getStatusCode());
      $this->call('GET', '/productos/1/edit');
      $response->assertStatus(302);


    }
}
