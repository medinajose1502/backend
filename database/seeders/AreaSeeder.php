<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->insert([
            'nombre' => 'Social',
            'descripcion' => 'Esta es la descripción para el área social.',
            'imagen_principal' => 'area-1.png',
        ]);

        DB::table('area')->insert([
            'nombre' => 'Deportiva',
            'descripcion' => 'Esta es la descripción para el área deportiva.',
            'imagen_principal' => 'area-1.png',
        ]);

        DB::table('area')->insert([
            'nombre' => 'Recreativa',
            'descripcion' => 'Esta es la descripción para el área recreativa del club.',
            'imagen_principal' => 'area-1.png',
        ]);

        DB::table('area')->insert([
            'nombre' => 'Fuente de soda',
            'descripcion' => 'Esta es la descripción para el área de comida del club.',
            'imagen_principal' => 'area-1.png',
        ]);
    }
}
