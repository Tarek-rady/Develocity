<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{

    public function run()
    {
        // الاقسام الفرعيه

        Tag::insert([

              [
                'name' => 'Hot' ,


                'created_at' => now() ,
              ],

              [
                'name' => 'Deals' ,

                'created_at' => now() ,
              ],


              [
                'name' => 'Trending' ,


                'created_at' => now() ,
              ],


              [
                'name' => 'Big Sale' ,


                'created_at' => now() ,
              ],


        ]);
    }
}
