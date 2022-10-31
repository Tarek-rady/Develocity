<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaticPagesTable extends Migration
{

    public function up()
    {
        Schema::create('static_pages', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();

            $table->text('desc')->nullable();

            $table->string('key')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('static_pages');
    }
}
