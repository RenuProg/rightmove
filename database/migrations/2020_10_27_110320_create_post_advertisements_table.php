<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('property_sub_type');
            $table->string('property_title');
            $table->string('total_area');
            $table->string('builtup_area');
            $table->string('carpet_area');
            $table->string('localtion');
            $table->string('price');
            $table->string('bathroom');
            $table->string('bedroom');
            $table->string('balcony');
             $table->string('available_floor');
             $table->string('about_property');
             $table->string('image');
             $table->boolean('is_active')->default('1');             
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
        Schema::dropIfExists('post_advertisements');
    }
}
