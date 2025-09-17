<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Drink;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // PizzaSeeder::class,
            //PriceSeeder::class
            //DrinkSeeder::class
            //DessertSeeder::class
            //ExtraSeeder::class
        ]);
    }
}
