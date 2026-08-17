<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Toy;

class ToySeeder extends Seeder
{
    public function run(): void
    {
        $juguetes = [
            // Niños
            ['nombre' => 'Pista de Autos Hot Wheels', 'precio' => 350.00, 'genero' => 'nino'],
            ['nombre' => 'Figura de Acción Spider-Man', 'precio' => 280.00, 'genero' => 'nino'],
            ['nombre' => 'Set de Bloques de Construcción', 'precio' => 450.00, 'genero' => 'nino'],
            // Niñas
            ['nombre' => 'Muñeca Barbie Fashion', 'precio' => 320.00, 'genero' => 'nina'],
            ['nombre' => 'Set de Arte y Pintura', 'precio' => 210.00, 'genero' => 'nina'],
            ['nombre' => 'Casa de Muñecas', 'precio' => 550.00, 'genero' => 'nina'],
        ];

        foreach ($juguetes as $juguete) {
            Toy::create($juguete);
        }
    }
}
