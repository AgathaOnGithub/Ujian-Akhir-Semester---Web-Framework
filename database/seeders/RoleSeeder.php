<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Role::create(['name' => 'Admin']);
        \App\Models\Role::create(['name' => 'User']);
    }
}