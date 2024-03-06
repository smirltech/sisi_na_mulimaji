<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class realization extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('realizations')->insert([
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'assets/img/2024/realization/delivery phy.bmp' ,
            ],
            [
                'date' => '2021 - 2022',
                'title' => 'Fourniture d’engrais et produits phytosanitaires et encadrement',
                'content' => 'de plus de 100 fermiers aux environs de Lubumbashi dans les différents types de systèmes d’irrigation',
                'image' => 'assets/img/2024/realization/2.jpg' ,
            ],
            [
                'date' => '2019 – 2020',
                'title' => 'Fourniture d’engrais et produits phytosanitaires',
                'content' => 'à ADSSE (ongd) et UNHCR',
                'image' => 'assets/img/2024/realization/3.jpg',
            ],
            [
                'date' => '2018 – 2019',
                'title' => 'Installation des systèmes d’irrigation goutte à goutte',
                'content' => 'sur un champ d’essai de 5 cultures maraîchères (5 hectares) au village Mwangakivula (Lualaba) via le département de développement économique de ICT et TFM',
                'image' => 'assets/img/2024/realization/iri.png',
            ],

            [
                'date' => '2016 – 2017',
                'title' => 'Fourniture d’engrais et produits phytosanitaires',
                'content' => 'à SEED CO et SEK nous avons initié 500 ménages de village Katanga; Bungubungu; Kangabwa; Lukutwe dans la culture de maïs et maitrise de cultures maraîchères.',
                'image' => 'assets/img/2024/realization/5.png',
            ],
            [
            'date' => '2020, 2021, et 2022',
            'title' => 'Accompagnement de plus de 100 jeunes et femmes réfugiés en formations professionnelles',
            'content' => 'à l’INPP dans diverses filières (Coupe-couture, conduite automobile, restaurant et pâtisserie, esthétique et coiffure, ajustage-soudure, etc)',
            'image' => 'assets/img/2024/realization/1.jpg',
            ]
        ]);
    }
}
