<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySubTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_sub_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_type_id')->index()->nullable();
             $table->string('type');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('property_type_id')->references('id')->on('property_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_sub_type');
    }
}
