<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tCliente', function (Blueprint $table) {
            //$table->increments('id');
            $table->string('cedula', 100);
            $table->string('nombre_Completo', 100);
            $table->string('telefono_Contacto', 10);
            $table->primary('cedula');
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
        Schema::dropIfExists('migraciontCliente');
    }
}