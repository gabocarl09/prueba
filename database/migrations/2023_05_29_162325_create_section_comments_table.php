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
        Schema::create('section_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('user_name');
            $table->date('date');
            $table->time('hour');
            $table->integer('id_foods')->unsigned();
            $table->foreign('id_foods')->references('id')->on('foods')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_tourist_destinations')->unsigned();
            $table->foreign('id_tourist_destinations')->references('id')->on('tourist_destinations')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('section_comments');
    }
};
