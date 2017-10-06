<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('offer_id');
            $table->unsignedInteger('reference_id')->nullable();
            $table->unsignedInteger('number_of_itroductions')->nullable();
            $table->string('min_amount')->nullable();
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
        Schema::dropIfExists('reference_offers');
    }
}
