<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; // Asegúrate de importar Carbon

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'nombre' => 'Tecnología',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Educación',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Salud',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Ciencia',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Arte',
                'created_at' => Carbon::now()
            ]
        ];

        DB::table('etiquetas')->insert($data);
    }
}
