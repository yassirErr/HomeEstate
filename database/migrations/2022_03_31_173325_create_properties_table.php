<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique()->nullable();
            $table->decimal('total_price',18,4)->unsigned()->default();
            $table->decimal('price_meter',18,1)->unsigned()->nullable();
            $table->string('location')->nullable();
            $table->string('area')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->boolean('air_condition')->nullable();
            $table->boolean('swimming_pool')->nullable();
            $table->boolean('central_heating')->nullable();
            $table->boolean('laundry_room')->nullable();
            $table->boolean('gym')->nullable();
            $table->boolean('alarm')->nullable();
            $table->boolean('window_covering')->nullable();
            $table->boolean('internet')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
            $table->softDeletes();
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
        Schema::dropIfExists('properties');
    }
}
