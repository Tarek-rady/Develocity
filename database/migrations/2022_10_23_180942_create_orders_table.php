<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->enum('status' , ['waiting' , 'completed' , 'canceld'])->nullable();
            $table->enum('type' , ['cart' , 'order'])->nullable();
            $table->string('subtotal')->nullable();
            $table->string('discount')->default(0);
            $table->string('tax')->nullable();
            $table->string('total')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('street_name')->nullable();
            $table->string('special_mark')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('country_id')->nullable()->references('id')->on('countries')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->references('id')->on('cities')->cascadeOnDelete();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
