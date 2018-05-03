<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class permissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'Administrar roles y permissions']);
    }
}
