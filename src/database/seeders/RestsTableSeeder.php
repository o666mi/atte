<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'rest_start' => '00:30:00'
            'rest_end' => '09:30:00'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'rest_start' => '00:30:00'
            'rest_end' => '09:29:50'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'rest_start' => '00:30:00'
            'rest_end' => '09:29:50'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'rest_start' => '00:30:00'
            'rest_end' => '09:29:40'
        ];
        DB::table('rests')->insert($time);
        $time = [
            'rest_start' => '00:30:00'
            'rest_end' => '09:29:40'
        ];
        DB::table('rests')->insert($time);
    }
}
