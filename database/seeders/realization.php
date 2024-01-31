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
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ],
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ],
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ],
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ],
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ],
            [
                'date' => '2023',
                'title' => 'Fourniture de 39 tonnes de Mycosol (engrais biologique) et 1680 litre d’herbicide',
                'content' => 'sous le bon de commande 4500437150 à Mutanda Mining (Vendor n° 1081219)',
                'image' => 'https://www.entreprises-magazine.com/wp-content/uploads/2019/11/IMG_20191107_105724.jpg',
            ]
        ]);
    }
}
