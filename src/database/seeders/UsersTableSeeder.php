<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = [
            'name' => 'テスト太郎'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト次郎'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト三郎'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト四郎'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト五郎'
        ];
        DB::table('users')->insert($employee);
    }
}
