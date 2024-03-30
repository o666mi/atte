<?php

namespace Database\Seeders;

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
        $this->call(AttendancesTableSeeder::class);
        $this->call(RestsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
