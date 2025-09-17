<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Extra;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Extra::create([
            'name' => 'Chimichurri',
            'description' => 'Para darle un sabor extra a tus comidas te traemos esta salsa tipica argentina',
            'image_link' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPZ2J-DscsMoag19pgwOzKeHlfUWhhkSVZtA&s',
            'price' => 20.95
        ]);

        Extra::create([
            'name' => 'Salsa macha',
            'description' => 'Hecha con chiles secos y aceite de oliva',
            'image_link' => 'https://cdn7.kiwilimon.com/recetaimagen/27555/1200x600/26219.jpg.webp',
            'price' => 15.95
        ]);

        Extra::create([
            'name' => 'Aderezo cesar',
            'description' => 'Salsa originaria de Tijuana, contamos con la receta original',
            'image_link' => 'https://cdn7.kiwilimon.com/recetaimagen/12184/640x640/35784.png.webp',
            'price' => 32.65
        ]);
    }
}
