<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurantInformations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restaurantName');
            $table->string('restaurantType');
            $table->string('restaurantEmail');
            $table->string('restaurantFamily');
            $table->string('Cuisine');
            $table->string('aboutRestaurant');
            $table->integer('restaurantPhone');
            $table->string('State');
            $table->string('City');
            $table->string('restaurantAddress');
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
        Schema::dropIfExists('restaurantInformations');
    }
}
