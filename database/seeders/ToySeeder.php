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
        [
            'nombre' => 'Pista de Autos Hot Wheels', 
            'precio' => 350.00, 
            'genero' => 'nino',
            'marca' => 'Mattel',
            'edad' => '5 a 12 años',
            'descripcion' => 'Increíble pista con giros de 360 grados. Incluye dos autos de carreras.'
        ],
        [
            'nombre' => 'Figura de Acción Spider-Man', 
            'precio' => 280.00, 
            'genero' => 'nino',
            'marca' => 'Hasbro',
            'edad' => '4+ años',
            'descripcion' => 'Figura articulada de 30cm con traje clásico y accesorios de telaraña.'
        ],
        [
            'nombre' => 'Set de Bloques de Construcción', 
            'precio' => 450.00, 
            'genero' => 'nino',
            'marca' => 'LEGO',
            'edad' => '6 a 14 años',
            'descripcion' => 'Set de 500 piezas para construir vehículos y edificios espaciales.'
        ],
        // Niñas
        [
            'nombre' => 'Muñeca Barbie Fashion', 
            'precio' => 320.00, 
            'genero' => 'nina',
            'marca' => 'Mattel',
            'edad' => '3+ años',
            'descripcion' => 'Muñeca con diferentes cambios de ropa y accesorios de moda.'
        ],
        [
            'nombre' => 'Set de Arte y Pintura', 
            'precio' => 210.00, 
            'genero' => 'nina',
            'marca' => 'Crayola',
            'edad' => '5 a 12 años',
            'descripcion' => 'Maletín completo con acuarelas, crayones, marcadores y hojas para dibujar.'
        ],
        [
            'nombre' => 'Casa de Muñecas', 
            'precio' => 550.00, 
            'genero' => 'nina',
            'marca' => 'KidKraft',
            'edad' => '4 a 10 años',
            'descripcion' => 'Casa de madera de tres pisos con muebles miniatura incluidos.'
        ],
    ];

    foreach ($juguetes as $juguete) {
        Toy::create($juguete);
    }
}
}
