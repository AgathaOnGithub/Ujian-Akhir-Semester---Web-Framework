<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Record::factory(50)->create();
    }
}
