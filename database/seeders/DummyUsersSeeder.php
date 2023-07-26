<?php

namespace Database\Seeders;

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
        $userData = [
            [
                'name' => 'mas admin',
                'email' => 'admin@admin.com',
                'role' => 'admin',
                'password'=> bcrypt('1234')
            ],
            [
                'name' => 'mas user',
                'email' => 'userr@gmail.com',
                'role' => 'user',
                'password'=> bcrypt('2345')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
