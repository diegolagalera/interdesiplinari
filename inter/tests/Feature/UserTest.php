<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    function test_it_loads_the_users_list_page()
    {
        $response =$this->get('/'); //realitza una solicitud a la aplicación
        $response->assertStatus(200); //afirma que la resposa sigue el següent codi
    }

   function testApplication()
    {
      $response = $this->withSession(['administrador' => 'administrador'])
                         ->get('/');
    }

   function testApplication1()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/');
    }
}
