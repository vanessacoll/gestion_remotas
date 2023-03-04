<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table-> unsignedInteger ( 'id_menu' ) -> predeterminado ( 0 );
            $table-> cadena ( 'des_menu' , 50 );
            $table-> cadena ( 'url' , 100 );
            $table-> unsignedInteger ( 'orden' ) -> predeterminado ( 0 );
            $table-> cadena ( 'icono' , 50 ) -> anulable ();
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
        Schema::dropIfExists('menus');
    }
}
