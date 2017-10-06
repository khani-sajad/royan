<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('since')->nullable();
            $table->string('untill')->nullable();
            $table->string('number_of_shops')->nullable();
            $table->string('amount')->nullable();
            $table->string('discount')->nullable();
            $table->string('points')->nullable();
            $table->string('gift')->nullable();
            $table->unsignedSmallInteger('type')->default(1);// 1 for public, 2 for reference
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
