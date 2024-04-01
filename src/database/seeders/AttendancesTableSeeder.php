<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = [
            'user_id' => 31,
            'date' => '2024-04-01',
            'work_start' => '10:00:00',
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'user_id' => 32,
            'date' => '2024-04-01',
            'work_start' => '10:00:10',
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'user_id' => 33,
            'date' => '2024-04-01',
            'work_start' => '10:00:10',
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'user_id' => 34,
            'date' => '2024-04-01',
            'work_start' => '10:00:20',
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'user_id' => 35,
            'date' => '2024-04-01',
            'work_start' => '10:00:20',
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
    }
}
