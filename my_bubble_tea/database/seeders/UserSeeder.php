<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'ad',
            'email' => 'ad@gmail.com',
            'phone' => 023040550 ,
            'adress' => '12 rue mercier',
            'password' => 'dodo1205'
        ]);
    }
}
