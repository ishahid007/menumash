<?php

namespace Database\Seeders;

use App\Models\Menu;
//
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $menus = [
            [
                'name' => 'Burger',
                'price' => 10.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Drink
            [
                'name' => 'Coke',
                'price' => 2.00,
                'type' => 'drink',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Dessert
            [
                'name' => 'Ice Cream',
                'price' => 5.00,
                'type' => 'dessert',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Other
            [
                'name' => 'Fries',
                'price' => 3.00,
                'type' => 'other',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data
        Menu::insert($menus);
    }
}
