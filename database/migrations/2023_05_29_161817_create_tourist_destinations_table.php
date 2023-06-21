<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_destinations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ubication');
            $table->string('location_history');
            $table->string('section_comments');
            $table->integer('id_maps')->unsigned();
            $table->foreign('id_maps')->references('id')->on('maps')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('tourist_destinations');
    }
};
