<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run()
    {

        // المنتجات

        Product::insert([

            [
                'title' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,
                'img' => 'products/1.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,
                'size' => '22' ,
                'category_id' => 1 ,
                'tag_id' => 2 ,
                'created_at' => now() ,

             ] ,

             [
                'title' => 'شاحن وايرلس سريع ومنبه وساعة ومصباح ليلي في جهاز واحد 15 وات' ,

                'img' => 'products/2.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 2 ,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'ساعة منبه بشاشة ليد رقمية مع خاصية التحكم الصوتي في الاضاءة' ,

                'img' => 'products/3.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 3,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'شاحن وايرلس سريع وهولدر ومصباح ليد في جهاز واحد 10 واط' ,

                'img' => 'products/4.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 4 ,
                'tag_id' => 2 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'شاحن وايرلس سريع وهولدر ومصباح ليد في جهاز واحد 10 واط' ,

                'img' => 'products/1.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 5 ,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,

             [
                'title' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'img' => 'products/1.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 1 ,
                'tag_id' => 2 ,
                'created_at' => now() ,

             ] ,

             [
                'title' => 'شاحن وايرلس سريع ومنبه وساعة ومصباح ليلي في جهاز واحد 15 وات' ,

                'img' => 'products/2.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 2 ,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'ساعة منبه بشاشة ليد رقمية مع خاصية التحكم الصوتي في الاضاءة' ,

                'img' => 'products/3.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 3,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'شاحن وايرلس سريع وهولدر ومصباح ليد في جهاز واحد 10 واط' ,

                'img' => 'products/4.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 4 ,
                'tag_id' => 2 ,
                'created_at' => now() ,

             ] ,


             [
                'title' => 'شاحن وايرلس سريع وهولدر ومصباح ليد في جهاز واحد 10 واط' ,

                'img' => 'products/1.jpg' ,
                'price' => '120' ,
                'new_price' => null ,
                'desc' => 'منبه وساعة بشاشة ليد رقمية ديجيتال سهلة القرأه لغرف النوم' ,

                'size' => '22' ,
                'category_id' => 5 ,
                'tag_id' => 3 ,
                'created_at' => now() ,

             ] ,
        ]);
    }
}
