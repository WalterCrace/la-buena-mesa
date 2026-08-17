<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    public function run(): void
    {
        $platillos = [
            [
                'name' => 'Ceviche Fusión',
                'description' => 'Ceviche de pescado fresco con mango, maracuyá y un toque de ají.',
                'price' => 15.50,
                'category' => 'Entradas',
                'is_available' => true,
            ],
            [
                'name' => 'Risotto de Hongos Silvestres',
                'description' => 'Risotto cremoso preparado con mezcla de hongos y aceite de trufa.',
                'price' => 22.00,
                'category' => 'Platos Fuertes',
                'is_available' => true,
            ],
            [
                'name' => 'Salmón Glaseado',
                'description' => 'Filete de salmón al horno con glaseado de miel y mostaza, acompañado de espárragos.',
                'price' => 25.00,
                'category' => 'Platos Fuertes',
                'is_available' => true,
            ],
            [
                'name' => 'Volcán de Chocolate',
                'description' => 'Bizcocho de chocolate relleno de fudge caliente, acompañado de helado de vainilla.',
                'price' => 8.50,
                'category' => 'Postres',
                'is_available' => true,
            ]
        ];

        foreach ($platillos as $platillo) {
            MenuItem::create($platillo);
        }
    }
}
