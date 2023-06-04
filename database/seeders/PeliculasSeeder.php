<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            'titulo' => 'El Gato con Botas: El último deseo',
            'id_thmdb' => '315162',
            'img_thumb' => 'ygqZ758t5oBYKP1y8LHdeflNW79.jpg',
            'img_portada' => 'dO2y8j12P7YKF5R0KhDMLQP7BI7.jpg',
            'url_1080' => 'https://www.dropbox.com/s/xry388nptr654tz/315162.mp4?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'M3GAN',
            'id_thmdb' => '536554',
            'img_thumb' => 'ogSpQMynabVu91Bi7AuUA8tshfb.jpg',
            'img_portada' => 'rrYrO4N6f6AvuK2qCGW1lP0JfRQ.jpg',
            'url_1080' => 'https://www.dropbox.com/s/0qxcck2pu7fy5y3/536554.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Llaman a la puerta',
            'id_thmdb' => '631842',
            'img_thumb' => '4Zna9CvyzaAgejsErmyXmHC64Dd.jpg',
            'img_portada' => 'A7QnUXhA6gkSFBcqYIhfU1FJ8A9.jpg',
            'url_1080' => 'https://www.dropbox.com/s/w4jctz6jvr89wts/631842.mp4?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Black Panther: Wakanda Forever',
            'id_thmdb' => '505642',
            'img_thumb' => '3nRpczJi9l1zfc726hzxoD55mKS.jpg',
            'img_portada' => 's9q6Sj3dunuAXuH4BTnWAP2SWb0.jpg',
            'url_1080' => 'https://www.dropbox.com/s/kckpqh1zvbmhdqp/505642.mp4?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Una boda explosiva',
            'id_thmdb' => '758009',
            'img_thumb' => '3ixVYoqCATZI2mLzIHI9T5Zj2LL.jpg',
            'img_portada' => 'rYjWruRR5UEstLg4DjA6E1pIu2b.jpg',
            'url_1080' => 'https://www.dropbox.com/s/593oe8nc5kl3c26/758009.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Avatar: El sentido del agua',
            'id_thmdb' => '76600',
            'img_thumb' => 'zJdnhiccfyyTlSwIN81qw4SfEjQ.jpg',
            'img_portada' => '5axDhsRkfTy2fHJcKP66DmlJdDp.jpg',
            'url_1080' => 'https://www.dropbox.com/s/0qxcck2pu7fy5y3/536554.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Pinocho de Guillermo del Toro',
            'id_thmdb' => '555604',
            'img_thumb' => '2L7NkJVBkfu7TwNbXX9f93LVdaT.jpg',
            'img_portada' => '4QZfck16hkNuIZOUSBxqv8EayZW.jpg',
            'url_1080' => 'https://www.dropbox.com/s/swv9ewq0vus5xck/555604.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'JUNG_E',
            'id_thmdb' => '843794',
            'img_thumb' => '3p96gREnfwYYDdtNklnloo0ksBl.jpg',
            'img_portada' => 'rzJ3ognamp54A0rqz5k2MNx7KMD.jpg',
            'url_1080' => 'https://www.dropbox.com/s/5g632sj5chuofbt/843794.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El ángel de la muerte',
            'id_thmdb' => '541134',
            'img_thumb' => '8ywXdzCRgGw5boNOknaN2LR5wqC.jpg',
            'img_portada' => 'gOywySl9X8am3GCoKlocknIStKn.jpg',
            'url_1080' => 'https://www.dropbox.com/s/7evpwht3bwfq2lq/541134.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'La caída',
            'id_thmdb' => '1037603',
            'img_thumb' => 'zYCHOfQAeYXPyBnEWmp3m1yESdI.jpg',
            'img_portada' => 'kXmnXE5RhLtmF9kGUMFA13KPSsN.jpg',
            'url_1080' => 'https://www.dropbox.com/s/motafzmf0dagqbp/1037603.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'MexZombies',
            'id_thmdb' => '675054',
            'img_thumb' => 'pTxw4GFE3ZfzJfvuUsPyD5njAuI.jpg',
            'img_portada' => 'pTxw4GFE3ZfzJfvuUsPyD5njAuI.jpg',
            'url_1080' => 'https://www.dropbox.com/s/x9epwenu19umo19/675054.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Sobredosis',
            'id_thmdb' => '896485',
            'img_thumb' => 'pJrAUJaeJn9wtHWPShhhesCR7m8.jpg',
            'img_portada' => '1Mxb68Eg5jCvZwfFG3QjMS5ysGJ.jpg',
            'url_1080' => 'https://www.dropbox.com/s/phvax88w02p24ur/896485.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Enola Holmes 2',
            'id_thmdb' => '829280',
            'img_thumb' => 'kaWoUugp3ZWgVsahtyjtWuo9hBi.jpg',
            'img_portada' => 'gFzATstoGE0DnYDbmwsayWpW46f.jpg',
            'url_1080' => 'https://www.dropbox.com/s/i9v7l7x77ozs5be/829280.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El país de los sueños',
            'id_thmdb' => '668461',
            'img_thumb' => 'xvsftW0ai916VTtH2gPjSFC7mGN.jpg',
            'img_portada' => 'gAGm0AJRYHzUyWs4DlOGBAUSssG.jpg',
            'url_1080' => 'https://www.dropbox.com/s/9g4r0r7cx6iw1gz/668461.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El menú',
            'id_thmdb' => '593643',
            'img_thumb' => 'eNcfCScUUyHQyjP84P25a8ColWp.jpg',
            'img_portada' => 'waKdsv9Io3OFRMh6mzzV18moM9O.jpg',
            'url_1080' => 'https://www.dropbox.com/s/v5obn1s7v2m1hhy/593643.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El espíritu de la Navidad',
            'id_thmdb' => 'El espíritu de la Navidad',
            'img_thumb' => 'lP3eQ8Xnhm46nlVBawLPQGbw4LR.jpg',
            'img_portada' => 'ptjRGcnA4HUOcYirC44ZS4gkksS.jpg',
            'url_1080' => 'https://www.dropbox.com/s/sp7kdj18nhpw6ny/632856.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Lobo vikingo',
            'id_thmdb' => '788752',
            'img_thumb' => 'kc9yCiRXHTYyNua0epMeAr516mH.jpg',
            'img_portada' => 'kc9yCiRXHTYyNua0epMeAr516mH.jpg',
            'url_1080' => 'https://www.dropbox.com/s/2ce0imsg60vat8x/788752.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Desencantada: Vuelve Giselle',
            'id_thmdb' => '338958',
            'img_thumb' => 'vQ18drQASqgEMhPzFAIziBmLtFP.jpg',
            'img_portada' => '6JtKTLwlWmDrsbRQelEDupXQ0a6.jpg',
            'url_1080' => 'https://www.dropbox.com/s/1rgw9g5w3lvwjpa/338958.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Scrooge: Cuento de Navidad',
            'id_thmdb' => '1001865',
            'img_thumb' => 'urWl17CNfA2kfmOk72kdLdUxALa.jpg',
            'img_portada' => 'urWl17CNfA2kfmOk72kdLdUxALa.jpg',
            'url_1080' => 'https://www.dropbox.com/s/txqc9v45j4lpdna/1001865.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Puñales por la espalda: El misterio de Glass Onion',
            'id_thmdb' => '661374',
            'img_thumb' => 'yXGsWQURm614onIpb3iBcp1iLz8.jpg',
            'img_portada' => '3l9MpppJMxhzjZr4FioQUYRJK1q.jpg',
            'url_1080' => 'https://www.dropbox.com/s/c37te74iryeupzs/661374.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Mundo extraño',
            'id_thmdb' => '877269',
            'img_thumb' => '1yoAmnK32LWfNtqEbdA7TUTRCkI.jpg',
            'img_portada' => '7fZje8ihMZBTUtVHira1CzzqZXe.jpg',
            'url_1080' => 'https://www.dropbox.com/s/32weo6y33zr53xb/877269.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Mighty Morphin Power Rangers: Ayer, hoy y siempre',
            'id_thmdb' => '1068141',
            'img_thumb' => 'qj1NrdMSm2xinqchBDD23U83vj8.jpg',
            'img_portada' => 'qj1NrdMSm2xinqchBDD23U83vj8.jpg',
            'url_1080' => 'https://www.dropbox.com/s/f8731244znhvxbs/1068141.mp4?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Peter Pan y Wendy',
            'id_thmdb' => '420808',
            'img_thumb' => 'eu90pvF7Yq7J1LzDrh5qtb9BDKM.jpg',
            'img_portada' => '24EhsBMZGDDxWQdK39vXgLTF49w.jpg',
            'url_1080' => 'https://www.dropbox.com/s/0qxcck2pu7fy5y3/536554.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Siete reyes deben morir',
            'id_thmdb' => '948713',
            'img_thumb' => '55PJNDJbD4Q9jFO4vaCnNl9dYEv.jpg',
            'img_portada' => 'yzcGI1ImcryJiwL9dnI7Q90R96H.jpg',
            'url_1080' => 'https://www.dropbox.com/s/fnlh66wtjwf1cu2/948713.mp4?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Vértigo',
            'id_thmdb' => '985939',
            'img_thumb' => 'aOidBN8Ch4LD6M9HyvDjTqM9fLF.jpg',
            'img_portada' => 'n9zz8tUuWvEWzkmGVA3c3ZpGRPB.jpg',
            'url_1080' => 'https://www.dropbox.com/s/thuxk4b83jlwpqs/985939.ts?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Winnie the Pooh: Sangre y Miel',
            'id_thmdb' => '980078',
            'img_thumb' => 'ZmbSkGEpXFufbDhgfTnSrFAguo.jpg',
            'img_portada' => 's6cOXBcUMDh1xQ4SWLN4p59lhnW.jpg',
            'url_1080' => 'https://www.dropbox.com/s/soc69yjsi44tv8z/980078.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Oso intoxicado',
            'id_thmdb' => '804150',
            'img_thumb' => 'i30ZaOHjIllEeQrL67IqKs8kk4A.jpg',
            'img_portada' => 'vKrZ3hblOICoLzgKVFoNskZMLLS.jpg',
            'url_1080' => 'https://www.dropbox.com/s/c684pkx8ni69eul/804150.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Scream 6',
            'id_thmdb' => '934433',
            'img_thumb' => 'wcw5J23XX8yY6oBSM1pRaz3SIDs.jpg',
            'img_portada' => '4m2E7Z0K2t8mh5XKlYF3lsP4UHQ.jpg',
            'url_1080' => 'https://www.dropbox.com/s/mkgcfnc7h6spf6s/934433.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Tetris',
            'id_thmdb' => '726759',
            'img_thumb' => 'qWZTrcZOIhWI4AkpferJFR5n5Ob.jpg',
            'img_portada' => '2MMWe9lpUvzqArKZxp4xZUWfAJV.jpg',
            'url_1080' => 'https://www.dropbox.com/s/4bzr3aawgeoo8z2/726759.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Las momias y el anillo perdido',
            'id_thmdb' => '816904',
            'img_thumb' => '7Bj9jar1wzibIEDl14A6rglX6Zg.jpg',
            'img_portada' => 'gKRC4CO7K6ElTLBAn7zm4ATBzMK.jpg',
            'url_1080' => 'https://www.dropbox.com/s/rjo0ydvb8kp42in/816904.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'La ballena',
            'id_thmdb' => '785084',
            'img_thumb' => '2tss8MH7dDvdrQLjKCbCAROHmhv.jpg',
            'img_portada' => 'vS4vVoqu58xTFFLBh7zSrwQQxgc.jpg',
            'url_1080' => 'https://www.dropbox.com/s/0z42atiq6zx81dd/785084.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => '¡Shazam! La furia de los dioses',
            'id_thmdb' => '594767',
            'img_thumb' => 'igFLHxab9zG0M89OmEpnOM6TPXn.jpg',
            'img_portada' => 'ijGEYDr1whWUfTHyOKL2pJn2MGF.jpg',
            'url_1080' => 'https://www.dropbox.com/s/bdh2rtli71ck5vi/594767.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El estrangulador de Boston',
            'id_thmdb' => '881164',
            'img_thumb' => 'Af1vSPTbraVVqc6kB3Avm55gxcq.jpg',
            'img_portada' => 'gyxOnLQW581MNf4LXEyppYHD62s.jpg',
            'url_1080' => 'https://www.dropbox.com/s/xam71og6qurkf4x/881164.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El rey de las sombras',
            'id_thmdb' => '948050',
            'img_thumb' => 'A70rat4oypHnFsb4J4MoSciNo3I.jpg',
            'img_portada' => 'uvbfybsew944AVWL2VhxvqvfGZQ.jpg',
            'url_1080' => 'https://www.dropbox.com/s/9ifaow64ksuy0dg/948050.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Ruido mental',
            'id_thmdb' => '1057577',
            'img_thumb' => '6JIBwcHAEEteIAgepqf4asxRKSh.jpg',
            'img_portada' => 'uUvv024D3QxkIKvBjZGbWV0Qyqs.jpg',
            'url_1080' => 'https://www.dropbox.com/s/39t6hwukrbao05f/1057577.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Calabozos & Dragones: Honor entre ladrones',
            'id_thmdb' => '493529',
            'img_thumb' => 'wVOeqGPXhkLUS9enQ5GIz6xE836.jpg',
            'img_portada' => 'pEIdpPdiESAwEbzq1SThafcmClW.jpg',
            'url_1080' => 'https://www.dropbox.com/s/8oe6jrxw4bu74ex/493529.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Misterio a la vista',
            'id_thmdb' => '638974',
            'img_thumb' => 'mYIEyVcU6Jap6zH949sFAfAnlDL.jpg',
            'img_portada' => 'mYIEyVcU6Jap6zH949sFAfAnlDL.jpg',
            'url_1080' => 'https://www.dropbox.com/s/l22otfbfezye56r/638974.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Sin tiempo',
            'id_thmdb' => '1085103',
            'img_thumb' => 'qCADhsz1DGb2eT35v4Pcq7widm1.jpg',
            'img_portada' => 'tBII0OKx92VsJj3bLCxxYUNMa1K.jpg',
            'url_1080' => 'https://www.dropbox.com/s/6wm9wzp8cevnyb5/1085103.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'El exorcista del Papa',
            'id_thmdb' => '758323',
            'img_thumb' => '4n7HJ322ARRWytwxLKEZi0mIrYE.jpg',
            'img_portada' => 'kZ0xFY3MvpczjSYT2QLJh6FzHfp.jpg',
            'url_1080' => 'https://www.dropbox.com/s/ef58h3aa0stfe1w/758323.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Super Mario Bros. La película',
            'id_thmdb' => '502356',
            'img_thumb' => 'pxNbpHhdWQqjKgCZaAYJGJng2ly.jpg',
            'img_portada' => 'dDsRyuDgRNOcsxe8369kRVshmuj.jpg',
            'url_1080' => 'https://www.dropbox.com/s/b0a4nlokhkkco61/502356.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Renfield: Asistente de vampiro',
            'id_thmdb' => '649609',
            'img_thumb' => 'qFcFYGmFJoqxxwwwZ7rt0FoTWsj.jpg',
            'img_portada' => 'grJwFX0ookeMLzvZ0Z0biRQdWwH.jpg',
            'url_1080' => 'https://www.dropbox.com/s/rulecke64wbf9p4/649609.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Evil Dead: El despertar',
            'id_thmdb' => '713704',
            'img_thumb' => 'yrx8cBjVTS5Z0KpCy40nV53XmsJ.jpg',
            'img_portada' => 'k3de9qEA4OIdg5wtTeDauF1rKLr.jpg',
            'url_1080' => 'https://www.dropbox.com/s/bzz74trxrev5ebs/713704.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        DB::table('peliculas')->insert([
            'titulo' => 'Chupa',
            'id_thmdb' => '736790',
            'img_thumb' => 'd98LtlE99QivxTFWcVovQ2ojsU5.jpg',
            'img_portada' => 'd98LtlE99QivxTFWcVovQ2ojsU5.jpg',
            'url_1080' => 'https://www.dropbox.com/s/6wlt6xqyuwk242e/736790.mkv?raw=1',
            'active' => 'true',
            'created_at' => date('Y:m:d h:i:s'),
            'updated_at' => date('Y:m:d h:i:s')
        ]);
        
    }
}


