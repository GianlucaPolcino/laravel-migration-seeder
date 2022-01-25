<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('city', 50);
            $table->string('state', 50);
            $table->string('hotel-name', 50);
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('stars')->unsigned();
            $table->text('description')->nullable();
            $table->integer('price')->unsigned();
            $table->boolean('is_available')->unsigned()->default(1);
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
        Schema::dropIfExists('travels');
    }
}
