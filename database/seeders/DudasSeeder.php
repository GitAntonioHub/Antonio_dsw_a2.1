<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DudasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dudas')->insert([
            'email' => 'antonio@jeje.com',
            'modulo' => 'PHP',
            'asunto' => 'Problema con validación',
            'descripcion' => 'No sé cómo validar los datos correctamente.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
