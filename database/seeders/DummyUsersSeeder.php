<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'mas admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password'=> bcrypt('1234567')
            ],

            [
                'name' => 'user',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password'=> bcrypt('1234567')
            ]

        ]);
    }

}
