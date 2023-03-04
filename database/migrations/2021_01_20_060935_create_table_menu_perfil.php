<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenuPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_perfil', function (Blueprint $table) {
            $table->unsignedBigInteger('id_perfil');
            $table->foreign('id_perfil', 'id_perfil_fk')->references('id_perfil')->on('perfiles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_menu');
            $table->foreign('id_menu', 'id_menu_fk')->references('id_menu')->on('menus')->onDelete('cascade')->onUpdate('restrict');
            $table->cadena ( 'accion' , 1 );
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_perfil');
    }
}
