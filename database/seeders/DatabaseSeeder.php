<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
          $this->call(TagSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(CountrySeeder::class);
         $this->call(citySeeder::class);
         $this->call(StaticPageSeeder::class);
         $this->call(ContactSeeder::class);
         $this->call(OrderSeeder::class);

    }
}
