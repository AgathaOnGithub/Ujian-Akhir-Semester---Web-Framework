<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            RecordSeeder::class,
            UserSeeder::class,
            ItemSeeder::class,
            AdminSeeder::class,
        ]);
    }
}