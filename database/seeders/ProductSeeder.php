<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::create([
            'name' => 'oolong Tea',
            'price' => 20,
            'description' => 'A delicious oolong tea with a hint of sweetness and a strong flavor.' ,
            'image' => 'my_bubble_tea/public/tea_folder/assets/img/products/oolong_tea.png',
            'type' => 'fresh-tea'
        ]);

        Product::create([
            'name' => 'Milk Tea',
            'price' => 10,
            'description' => 'A delicious Milk tea with a hint of sweetness and a strong flavor.' ,
            'image' => 'my_bubble_tea/public/tea_folder/assets/img/products/milk_tea.png',
            'type' => 'creamy-tea'
        ]);

        Product::create([
            'name' => 'Cream bubble',
            'price' => 15,
            'description' => 'A delicious Cream tea with a hint of sweetness and a strong flavor.' ,
            'image' => 'my_bubble_tea/public/tea_folder/assets/img/products/milk_coffee.png',
            'type' => 'Creamy-tea'
        ]);

        Product::create([
            'name' => 'Smoothie bubble',
            'price' => 14,
            'description' => 'A delicious Smoothie tea with a hint of sweetness and a strong flavor.' ,
            'image' => 'my_bubble_tea/public/tea_folder/assets/img/products/taro_smoothie.png',
            'type' => 'Creamy-tea'
        ]);

        Product::create([
            'name' => 'Red Tea',
            'price' => 10,
            'description' => 'A delicious Red tea with a hint of sweetness and a strong flavor.' ,
            'image' => 'https://www.pngegg.com/en/png-yifdw',
            'type' => 'fresh-tea'
        ]);
    }
}
