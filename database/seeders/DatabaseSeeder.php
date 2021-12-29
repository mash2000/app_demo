<?php

namespace Database\Seeders;

use Database\Seeders\BookableTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookableTableSeeder::class);
    }
}