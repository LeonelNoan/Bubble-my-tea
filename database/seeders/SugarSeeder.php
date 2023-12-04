<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sugar;

class SugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sugar::create([
            'sugar_level' => 'low'
        ]);
    }
}
