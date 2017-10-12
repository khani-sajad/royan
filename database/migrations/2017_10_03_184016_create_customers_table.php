<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile')->unique();
            $table->string('natinal_code')->nullable()->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('job')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('city_region')->nullable();
            $table->string('birthday')->nullable();
            $table->string('marriage_date')->nullable();
            $table->string('person_type')->nullable();
            $table->boolean('buy_type')->nullable();
            $table->boolean('is_reference')->default(0);
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
        Schema::dropIfExists('customers');
    }
}
