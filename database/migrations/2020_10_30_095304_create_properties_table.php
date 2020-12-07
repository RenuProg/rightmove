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
            $table->bigIncrements('id');
            
             $table->unsignedBigInteger('property_type_id')->index()->nullable();
            $table->unsignedBigInteger('property_sub_type_id');
            $table->string('property_title');
            $table->string('total_area');
            $table->string('builtup_area');
            $table->string('carpet_area');
            $table->string('localtion');
            $table->string('price');
            $table->unsignedBigInteger('bathroom_id')->index()->nullable();
            $table->unsignedBigInteger('bedroom_id')->index()->nullable();
            $table->unsignedBigInteger('balcony_id')->index()->nullable();
             $table->unsignedBigInteger('floor_id')->index()->nullable();
             $table->string('about_property');
             $table->string('image');
             $table->boolean('is_active')->default('1'); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('property_type_id')->references('id')->on('property_type');
             $table->foreign('property_sub_type_id')->references('id')->on('property_sub_type');
             $table->foreign('bathroom_id')->references('id')->on('bathroom');
             $table->foreign('bedroom_id')->references('id')->on('bedroom');
             $table->foreign('balcony_id')->references('id')->on('balcony');
             $table->foreign('floor_id')->references('id')->on('floor');



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
