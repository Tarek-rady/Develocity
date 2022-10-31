<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Order::insert([
               [

                    'customer_id' => 1,
                    'code' => rand(1000 , 9999),
                    'status' => 'waiting',
                    'type' => 'cart',
                    'name' => 'Tarrek',
                    'email' => 't@yahoo.com',
                    'phone' => '023004834434' ,
                    'street_name' => 'اجا',
                    'special_mark' => 'مدرسه الثانوي',
                    'address' => 'نوسا',
                    'country_id' => 1,
                    'city_id' => 2,

               ] ,

               [

                'customer_id' => 2,
                'code' => rand(1000 , 9999),
                'status' => 'waiting',
                'type' => 'cart',
                'name' => 'Ahmed',
                'email' => 'a@yahoo.com',
                'phone' => '012994381' ,
                'street_name' => 'اجا',
                'special_mark' => 'مدرسه الثانوي',
                'address' => 'نوسا',
                'country_id' => 2,
                'city_id' => 3,

               ] ,


                [

                    'customer_id' => 3,
                    'code' => rand(1000 , 9999),
                    'status' => 'waiting',
                    'type' => 'cart',
                    'name' => 'body',
                    'email' => 'b@yahoo.com',
                    'phone' => '94934817' ,
                    'street_name' => 'اجا',
                    'special_mark' => 'مدرسه الثانوي',
                    'address' => 'نوسا',
                    'country_id' => 2,
                    'city_id' => 1,

                ] ,
         ]);

         for ($i=0; $i<30 ; $i++) {
            Item::create([
                'product_id' => rand(1 , 10) ,
                'order_id' => rand(1 , 3) ,
                'qty' => rand(3 , 10) ,
                'price' => rand(100 , 600) ,
            ]);
         }
    }
}
