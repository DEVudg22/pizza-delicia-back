<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dessert;

class DessertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dessert::create([
            'name' => 'Flan napolitano',
            'description' => 'No es el tipico flan, es la receta original de Napoles',
            'image_link' => 'https://cdn7.kiwilimon.com/recetaimagen/2356/640x640/40673.jpg.jpg',
            'price' => 75.50
        ]);

        Dessert::create([
            'name' => 'Tiramusu',
            'description' => 'El postre mas tradicional de Italia, con la receta original',
            'image_link' => 'https://cdn7.kiwilimon.com/recetaimagen/35448/640x640/42520.jpg.jpg',
            'price' => 84.90
        ]);

        Dessert::create([
            'name' => 'Pay de zarzamora',
            'description' => 'Hecho con zarzamora totalmente natural',
            'image_link' => 'https://cdn7.kiwilimon.com/recetaimagen/1839/400x400/14815.jpg.webp',
            'price' => 54.50
        ]);
    }
}
