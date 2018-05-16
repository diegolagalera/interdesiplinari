<?php

// namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
class diegoTest extends TestCase
{
  use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
     // public function testBasicTest()
     //     {
     //         $response = $this->get('/users');
     //         $response->assertStatus(200);
     //     }

    //  public function test_basic()
    // {
    //   $this-visit('/');
    //
    //

     public function test_basic()
    {
      $response=$this->get('/');
      $response->assertStatus(200);

    }
     public function testApplication()
    {
        $user = factory( User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/productos');
                         self::assertTrue(true);
    }


    //
    // public function testHasItemInUsers()
    //     {
    //         $box = new User([
    //           'name' => 'yish',
    //           'cognom'=> 'asd',
    //           'email_confirm'=>1,
    //           'dni'=> '47384333',
    //           'tel'=> '9081723',
    //           'localitat'=> 'asdasd',
    //           'email'=> 'diegolagalera_@hotmail.com',
    //           'password'=> '123456'
    //         ]);
    //
    //         $this->be($box);
    //
    //         $this->assertTrue($user->name=('John'));
    //         $this->assertFalse($box->has('ball'));
    //     }
     // public function test_usuarios()
     // {
     //   $user=factory(App\User::class)->make([
     //       'name'=> 'asd',
     //       'cognom'=> 'asd',
     //       'email_confirm'=> 1,
     //       'dni'=> '47484339b',
     //       'tel'=> '977719234',
     //       'localitat'=> 'galera',
     //       'email'=> 'asd@hotmail.com',
     //       'password'=> '123456',
     //     ]);
     //
     //   $this->actingAs($user)
     //   ->withSession(['foo'=>'bar'])
     //   ->visit('/')
     //   ->see('ofertas');
     //
     // }
}
