<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('unit_types')->onDelete('cascade');
            $table->string('number');
            $table->double('rent');
            $table->string('details')->nullable();
            $table->boolean('isVacant');
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
        Schema::dropIfExists('units');
    }
}
