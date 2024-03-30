<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'work_start' => '10:00:00'
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'work_start' => '10:00:10'
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'work_start' => '10:00:10'
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'work_start' => '10:00:20'
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
        $time = [
            'work_start' => '10:00:20'
            'work_end' => '20:00:00'
        ];
        DB::table('attendances')->insert($time);
    }
}
