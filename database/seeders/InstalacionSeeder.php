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
        DB::table('instalacion')->insert([
            'nombre' => 'Salón de fiestas #1',
            'descripcion' => 'Esta es la descripción para el salón de fiestas del área Social',
            'imagen_principal' => 'instalacion-1.png',
            'area_id' => '1'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Cancha de bolas criollas #1',
            'descripcion' => 'Esta es la descripción para la cancha de bolas criollas #1 del área Deportiva.',
            'imagen_principal' => 'instalacion-2.png',
            'area_id' => '2'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Mesa de pool #1',
            'descripcion' => 'Esta es la descripción para la Mesa de pool #1 del área recreativa del club.',
            'imagen_principal' => 'instalacion-3.png',
            'area_id' => '3'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Cantina #1',
            'descripcion' => 'Esta es la descripción para la Cantina del área de comida del club.',
            'imagen_principal' => 'instalacion-4.png',
            'area_id' => '4'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Salón de fiestas #2',
            'descripcion' => 'Esta es la descripción para el salón de fiestas del área Social',
            'imagen_principal' => 'instalacion-5.png',
            'area_id' => '1'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Cancha de bolas criollas #2',
            'descripcion' => 'Esta es la descripción para la cancha de bolas criollas #1 del área Deportiva.',
            'imagen_principal' => 'instalacion-6.png',
            'area_id' => '2'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Mesa de pool #2',
            'descripcion' => 'Esta es la descripción para la Mesa de pool #1 del área recreativa del club.',
            'imagen_principal' => 'instalacion-7.png',
            'area_id' => '3'
        ]);

        DB::table('instalacion')->insert([
            'nombre' => 'Cantina #2',
            'descripcion' => 'Esta es la descripción para la Cantina del área de comida del club.',
            'imagen_principal' => 'instalacion-8.png',
            'area_id' => '4'
        ]);
    }
}
