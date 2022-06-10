<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Ayuni Putri',
                'email' => 'ayuni@mail.com',
                'password' => Hash::make('password'),
                'type' => 'a',
            ],
            [
                'name' => 'Hanaan Firdaus',
                'email' => 'hanaan@mail.com',
                'password' => Hash::make('password'),
                'type' => 'u',
            ]
        ];

        DB::table('users')->insert($user);
    }
}
