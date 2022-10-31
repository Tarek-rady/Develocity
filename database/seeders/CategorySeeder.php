<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        // الاقسام الرئيسيه

        Category::insert([

             [

                 'created_at' => now() ,
                'name' => 'Gadgets' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Dressing' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Kitchen' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Decor' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Sports' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Bathroom' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Life Style' ,
             ] ,

             [

                 'created_at' => now() ,
                'name' => 'Automotive' ,
             ] ,


        ]);
    }
}
