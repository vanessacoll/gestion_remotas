<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remotas', function (Blueprint $table) {
            $table->bigIncrements('id_remota');
            $table->integer('id_cliente');
            $table->integer('id_plan');
            $table->integer('id_contencion');
            $table->integer('id_satelite');
            $table->string('nombre',100);
            $table->string('serial',20);
            $table->string('modmodem',50);
            $table->string('localidad',100);
            $table->string('direccion',100);
            $table->string('coordenadas',50);
            $table->string('tip_antena',50);
            $table->string('antena',50);
            $table->string('buc',50);
            $table->string('lnb',50);
            $table->integer('id_status');
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
        Schema::dropIfExists('remotas');
    }
}
