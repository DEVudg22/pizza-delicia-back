<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drink;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drink::create([
            'name' => 'Capuchino',
            'description' => 'Todo el sabor de Italia siguiendo la receta original',
            'image_link' => '',
            'price' => 70.50
        ]);

        Drink::create([
            'name' => 'Moka',
            'description' => 'Te servimos el mejor cafe del mundo, chocolate 100% mexicano, y la receta original Italiana',
            'image_link' => '',
            'price' => 80.50
        ]);

         Drink::create([
            'name' => 'Frapuchino',
            'description' => 'Si te gustan las bebidas frias, no te arrepentiras de probar nuestra propuesta',
            'image_link' => '',
            'price' => 65.50
        ]);
    }
}
