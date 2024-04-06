<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = [
            'attendance_id' => 1,
            'rest_start' => '00:30:00',
            'rest_end' => '09:30:00'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'attendance_id' => 2,
            'rest_start' => '00:30:00',
            'rest_end' => '09:29:50'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'attendance_id' => 3,
            'rest_start' => '00:30:00',
            'rest_end' => '09:29:50'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'attendance_id' => 4,
            'rest_start' => '00:30:00',
            'rest_end' => '09:29:40'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'attendance_id' => 5,
            'rest_start' => '00:30:00',
            'rest_end' => '09:29:40'
        ];
        DB::table('rests')->insert($time);
    }
}
