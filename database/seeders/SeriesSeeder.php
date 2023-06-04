<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
            'titulo' => 'Gotham Knights',
            'id_thmdb_series' => '195868',
            'img_thumb_series' => '5riy7SdIhMhhYcDqeEOICVvXEHS.jpg',
            'img_portada_series' => 'yv4cVXhdpme7gF9FznEIRnCXaHP.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'The Last of Us',
            'id_thmdb_series' => '100088',
            'img_thumb_series' => '8HIwg09k89FH7yqoy7loiVfId3U.jpg',
            'img_portada_series' => 'fLQxjFqJG2UWgMjAcXfQ8EK2aCj.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Reina Charlotte: Una historia de Bridgerton',
            'id_thmdb_series' => '196454',
            'img_thumb_series' => 'hvjyCO6iuZb54kKvIwJ6IoNndI6.jpg',
            'img_portada_series' => 'jsBAxXq1vcWBzVv5jVO7pJKKss0.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'La Brea',
            'id_thmdb_series' => '128839',
            'img_thumb_series' => '8sp9cyIMnh3mS6uZ7myVUvQ0SvR.jpg',
            'img_portada_series' => 'lygdnltzNQM8Ks6TtPsImou6f3A.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Obsesión',
            'id_thmdb_series' => '223313',
            'img_thumb_series' => 'jFghtFHu70SGQ5V4aqWuolkJgVC.jpg',
            'img_portada_series' => 'AkEN6vMOF6pCtqp5bpBLihfR1IK.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'MH370: El avión que desapareció',
            'id_thmdb_series' => '220499',
            'img_thumb_series' => 'lVyBjky45Yqay2G3DaN6pkFCaUH.jpg',
            'img_portada_series' => 'lVyBjky45Yqay2G3DaN6pkFCaUH.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Manes',
            'id_thmdb_series' => '220663',
            'img_thumb_series' => 'dk6bH5y7Q7bNYpQ3u5L4NLS1Roq.jpg',
            'img_portada_series' => 'dk6bH5y7Q7bNYpQ3u5L4NLS1Roq.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Demonio de Hijo',
            'id_thmdb_series' => '195237',
            'img_thumb_series' => 'vIzje93d5aWK6WA2aHsbctCNLZZ.jpg',
            'img_portada_series' => 'pZiaoKoBMUSqfkPHb1Ke7MpuGYG.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'División Palermo',
            'id_thmdb_series' => '219066',
            'img_thumb_series' => 'jffhwRp7gdZKiUDelXQSg0jtT76.jpg',
            'img_portada_series' => 'jffhwRp7gdZKiUDelXQSg0jtT76.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'La Primera Vez',
            'id_thmdb_series' => '219063',
            'img_thumb_series' => '8SB4i4grrqii6ND5plhN5fwSPfA.jpg',
            'img_portada_series' => 'zRYCzOfpOZzhJ2RxEVfWrphCx1x.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Sobreviviendo a los 30s',
            'id_thmdb_series' => '208793',
            'img_thumb_series' => '5riy7SdIhMhhYcDqeEOICVvXEHS.jpg',
            'img_portada_series' => '5riy7SdIhMhhYcDqeEOICVvXEHS.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'Red Rose',
            'id_thmdb_series' => '207878',
            'img_thumb_series' => 'dqlvfCryp7Tt60THA1epPYXWesu.jpg',
            'img_portada_series' => 'dqlvfCryp7Tt60THA1epPYXWesu.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
        DB::table('series')->insert([
            'titulo' => 'El Asesino Mediático',
            'id_thmdb_series' => '158876',
            'img_thumb_series' => 'wj6pVRz1bVB5YivkVJfA8mTWXpE.jpg',
            'img_portada_series' => 'wj6pVRz1bVB5YivkVJfA8mTWXpE.jpg',
            'active' => true,
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')

        ]);
    }
}
