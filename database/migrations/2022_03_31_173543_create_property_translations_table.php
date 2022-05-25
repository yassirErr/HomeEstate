<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('building_age')->nullable();
            $table->string('parking')->nullable();
            $table->string('cooling')->nullable();
            $table->string('heating')->nullable();
            $table->string('sewer')->nullable();
            $table->string('water')->nullable();
            $table->string('torage_room')->nullable();
            $table->string('exercise_room')->nullable();
            $table->string('locale');
            $table->longText('description');
            $table->unique(['property_id','locale']);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_translations');
    }
}
