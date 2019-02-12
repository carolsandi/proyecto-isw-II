<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->text('apellido')->nullable();
            $table->text('id_telefono')->nullable();
            $table->text('correo')->nullable();
            $table->text('direccion');
            $table->foreign('id_telefono')->references('id')->on('telefonos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacto', function (Blueprint $table) {
            //
        });
    }
}
