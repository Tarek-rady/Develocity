<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Favourite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert([
               [
                'name' => 'tarek' ,
                'email' => 't@yahoo.com' ,
                'phone' => '01067422197' ,
                'email_verified_at' => now() ,
                'password' => bcrypt('password') ,
                'remember_token'=>Str::random(10),
               ] ,

               [
                'name' => 'Ahmed' ,
                'email' => 'a@yahoo.com' ,
                'phone' => '01067422194' ,
                'email_verified_at' => now() ,
                'password' => bcrypt('password') ,
                'remember_token'=>Str::random(10),
               ] ,

               [
                'name' => 'Tito' ,
                'email' => 'h@yahoo.com' ,
                'phone' => '01063422194' ,
                'email_verified_at' => now() ,
                'password' => bcrypt('password') ,
                'remember_token'=>Str::random(10),
               ]
        ]);


        for ($i=0; $i < 20 ; $i++) {

            Favourite::create([
              'customer_id' => rand(1 , 2) ,
              'product_id' => rand(1 , 9) ,
            ]);
        }



    }
}
