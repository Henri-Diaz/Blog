<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nombre' => 'Tecnología',
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

        DB::table('categorias')->insert($data);
    }
}
