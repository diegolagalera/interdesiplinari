<?php

// namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DatabaseMigration;
use Faker\Generator as Faker;

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
    // public function testloginuser(){
    //   $response = $this->call('GET', '/login', [
    //     'email' => 'user@gmail.com',
    //     'password' => '123456',
    //     '_token' => csrf_token()
    //   ]);
    //   $this->assertEquals(200, $response->getStatusCode());
    //   $this->call('GET', '/productos/1/edit');
    //   $response->assertStatus(302);
    //
    //
    // }


    //diego

    // public function test_a_guest_can_see_all_post()
    // {
    //   $post= factory(\App\productes::class,5)->create();
    //
    //
    // }
  
}
