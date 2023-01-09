<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'José Medina',
            'email' => 'medinajose1502'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gustavo Rivero',
            'email' => 'gustavoerivero12'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marco Padua',
            'email' => 'mpadua1995'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Albert Vivas',
            'email' => 'albertvivas'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'José Rivero',
            'email' => 'riverojose.66'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Orianna Santana',
            'email' => 'oriannaysantana'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Valladares',
            'email' => 'luismvalladareso'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Torrealba',
            'email' => 'luisdavid25torrealba'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Michael Montero',
            'email' => 'michaelmgontero.idb'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jennibex Mora',
            'email' => 'jennibexvms'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marihec Miranda',
            'email' => 'marihecmiranda160498'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Yurisbellys Brizuela',
            'email' => 'yurisbellys23'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Clisdermar Vivas',
            'email' => 'clisdermar'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Raitme Citterio',
            'email' => '1001.14877596.ucla'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rafael Mendez',
            'email' => 'rafaelmendezv1692'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jonás Mendoza',
            'email' => 'eliasjonasvm'.'@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
