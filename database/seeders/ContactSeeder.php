<?php

namespace Database\Seeders;

use App\Models\ContactCompany;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{

    public function run()
    {
        // بيانات اتصال الشركه

        ContactCompany::insert([
             [
                'location' => 'Markmerce ElHaram' ,
                'phone' => ' +201016663555' ,
                'email' => 'info@Alpayaa.com' ,
                'facebook' => 'facebook' ,
                'twitter' => 'twitter' ,
                'linkedin' => 'linkedin' ,
             ],
        ]);
    }
}
