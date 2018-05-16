<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
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
}
