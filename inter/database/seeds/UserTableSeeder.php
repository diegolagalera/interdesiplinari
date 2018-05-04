<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name'  => 'Administrador',
          'dni' => '47484339B',
          'cognom' => 'Administrador',
          'tel' => '977719343',
          'localitat' => 'Amposta',
          'actiu' => '1',
          'email_confirm' => '1',
          'email' => 'administrador@gmail.com',
          'password' => '123456',
        ]);

        $user->assignRole('administrador');
    }
}
