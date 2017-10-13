<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_name');
            $table->string('register_number');
            $table->string('manager_name');
            $table->string('contact_name')->nullable();
            $table->string('telegram_channel')->unique();
            $table->string('telegram_id')->unique();
            $table->string('instagram_id')->unique();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('city_region')->nullable();
            $table->string('guild')->nullable();
            $table->string('shopping_center')->nullable();
            $table->string('address')->nullable();
            $table->string('commision_percentage_for_introducer')->nullable();
            $table->string('commision_points_for_introducer')->nullable();
            $table->string('commision_percentage_for_network')->nullable();
            $table->string('commision_points_for_network')->nullable();
            $table->string('monthly_support_for_admin')->nullable();
            $table->string('commision_percentage_for_admin')->nullable();
            $table->string('base_discount_percentage')->nullable();
            $table->string('base_gift_percentage')->nullable();
            $table->string('base_point')->nullable();
            $table->string('number_of_lotteries')->nullable();
            $table->text('awards_list')->nullable();
            $table->unsignedSmallInteger('sell_type')->nullable();
            $table->string('activity_type')->nullable();
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
        Schema::dropIfExists('receivers');
    }
}
