<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Chrome;

class ExampleTest extends DuskTestCase
{
        use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(User::class)->create([
            'email' => 'duilio@styde.net',
            'password' => '123456'        
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', $user->password)
                    ->press('Login')
                    ->assertPathIs('/');
        });
    }
}
