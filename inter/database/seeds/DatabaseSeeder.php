<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $this->call(permissionTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
        $this->call(ProductesTableSeeder::class);
>>>>>>> df71171f3c1d742bb058975d94ee23182168cb9e
    }
}
