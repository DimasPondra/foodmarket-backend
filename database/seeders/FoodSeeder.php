<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            [
                'name' => 'Ayam Bakar Madu',
                'description' => 'Satu ekor ayam kampung utuh dibakar dengan cita rasa yang manis pedas',
                'ingredients' => 'Bawang Putih, Bawang Merah, Cabai Merah, Cabai Rawit, Madu, Garam, Gula',
                'price' => '35000',
                'rate' => '4.3',
                'types' => 'rekomendasi',
            ],
            [
                'name' => 'Burger Kong',
                'description' => 'Burger dengan ukuran besar terdiri dari daging, sayur, hingga keju yang meleleh',
                'ingredients' => 'Roti, Daging Sapi, Sayur, Keju',
                'price' => '25000',
                'rate' => '4.7',
                'types' => 'populer',
            ],
            [
                'name' => 'Nasi Goreng Istimewa',
                'description' => 'Nasi goreng dengan cita rasa nusantara yang khas dilengkapi dengan acar, potongan ayam dan juga telur setengah matang',
                'ingredients' => 'Bawang Putih, Bawang Merah, Cabai Merah, Cabai Rawit, Nasi, Garam, Gula, Telur, Daging Ayam, Acar',
                'price' => '20000',
                'rate' => '4.5',
                'types' => 'rekomendasi',
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
