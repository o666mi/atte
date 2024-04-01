<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'テスト太郎',
            'email' => 'ta01@example.com',
            'password' => 'test01'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト次郎',
            'email' => 'ji02@example.com',
            'password' => 'test02'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト三郎',
            'email' => 'sa03@example.com',
            'password' => 'test03'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト四郎',
            'email' => 'si04@example.com',
            'password' => 'test04'
        ];
        DB::table('users')->insert($employee);
        $employee = [
            'name' => 'テスト五郎',
            'email' => 'go05@example.com',
            'password' => 'test05'
        ];
        DB::table('users')->insert($employee);
    }
}
