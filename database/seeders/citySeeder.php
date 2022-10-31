<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class citySeeder extends Seeder
{

    public function run()
    {
        // المحافظه

      City::insert([

            [
               'name' => 'القاهره' ,

               'country_id' => 1 ,
               'created_at' => now() ,
               ] ,


            [
                'name' => 'ليفربول' ,

                'country_id' => 2 ,
                'created_at' => now() ,
                ] ,


             [
                'name' => 'مانشستر سيتي' ,

                'country_id' => 2 ,
                'created_at' => now() ,
                ] ,


             [
                'name' => 'الاسكندريه' ,

                'country_id' => 1 ,
                'created_at' => now() ,
                ] ,


             [
                'name' => 'ميونح' ,

                'country_id' => 3 ,
                'created_at' => now() ,
                ] ,


             [
                'name' => 'برلين' ,

                'country_id' => 3 ,
                'created_at' => now() ,
                ] ,
      ]);

    }
}
