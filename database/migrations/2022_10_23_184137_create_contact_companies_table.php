<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactCompaniesTable extends Migration
{

    public function up()
    {
        Schema::create('contact_companies', function (Blueprint $table) {
            $table->id();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();
            $table->string('location')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contact_companies');
    }
}
