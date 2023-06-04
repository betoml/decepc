<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemporadasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 1,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 2,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 3,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 4,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 4,
            'temporadas' => '2',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 5,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 6,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 7,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 8,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 9,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 10,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 11,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 12,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('temporadas')->insert([
            'id_thmdb_series' => 13,
            'temporadas' => '1',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);

    }
}
