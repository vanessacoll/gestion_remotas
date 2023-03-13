<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatelitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('satelites', function (Blueprint $table) {
            $table->bigIncrements('id_satelite');
            $table->string('des_satelite',100);
            $table->string('ubicacion_azi',30);
            $table->string('ubicacion_ele',30);
            $table->string('ubicacion_pol',30);
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
        Schema::dropIfExists('satelites');
    }
}
