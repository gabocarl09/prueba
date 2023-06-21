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
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('payment_type');
            $table->float('payment_ammount');
            $table->integer('id_foods')->unsigned();
            $table->foreign('id_foods')->references('id')->on('foods')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('suscriptions');
    }
};
