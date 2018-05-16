<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use DB;

class diegoTest extends TestCase
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

    public function test_contactar() 
	{
	  $this->get('/contactar')
	    ->assertStatus(200)
	    ->assertSee('name');
	}

	public function test_user() 
	{
	  	factory(User::class)->create([
        'name' => 'Joel'
    	]);
 
    	$user=factory(User::class)->create([
        'name' => 'Ellie'
    	]);
		$this->be($user);
		$this->get('/cistella/show')
	    ->assertStatus(200)
	    ->assertSee('cesta');		
	    self::assertTrue(true);
    }
	/** @test */
	public function it_creates_a_new_user()
	{
	    factory(User::class)->create([
        	'name' => 'Duilio',
	        'email' => 'duilio@styde.net',
	        'password' => '123456'
    	]);
 

		$this->assertDatabaseHas('users', [
		    'name' => 'Duilio',
		    'email' => 'duilio@styde.net',
		]);

	}
	
}
