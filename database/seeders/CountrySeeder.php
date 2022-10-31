<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{

    public function run()
    {
        // الدوله

        Country::insert([

              [
                 'name' => 'مصر' ,

                   'created_at' => now() ,
                ] ,



             [
                'name' => 'انجلترا' ,

                  'created_at' => now() ,
            ] ,


             [
                'name' => 'المانيا' ,

                  'created_at' => now() ,
            ] ,



        ]);
    }
}
