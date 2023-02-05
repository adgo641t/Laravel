<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RegistroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registro')->truncate();

        DB::table('registro')->insert([
            [
                'id_i' => 1,
                'id_p' => 1,
            ],
            [
                'id_i' => 2,
                'id_p' => 1,
            ],
            [
                'id_i' => 1,
                'id_p' => 4,
            ],
            [
                'id_i' => 1,
                'id_p' => 2,
            ],
            [
                'id_i' => 2,
                'id_p' => 2,
            ],
            [
                'id_i' => 5,
                'id_p' => 2,
            ],
            [
                'id_i' => 6,
                'id_p' => 2,
            ],
            [
                'id_i' => 2,
                'id_p' => 3,
            ],
            [
                'id_i' => 3,
                'id_p' => 3,
            ],
            [
                'id_i' => 4,
                'id_p' => 3,
            ],
            [
                'id_i' => 1,
                'id_p' => 4,
            ],
            [
                'id_i' => 4,
                'id_p' => 4,
            ],
            [
                'id_i' => 6,
                'id_p' => 4,
            ],
            [
                'id_i' => 2,
                'id_p' => 5,
            ],
            [
                'id_i' => 3,
                'id_p' => 5,
            ],

        ]);
    }
}
