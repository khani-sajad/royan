<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBargsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bargs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('registered_for_id')->default(0);
            $table->unsignedInteger('reference_id')->nullable();
            $table->string('uid')->unique();
            $table->string('number')->unique();
            $table->string('useable_in')->default('0');
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
        Schema::dropIfExists('bargs');
    }
}
