<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tarjeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id();
            $table ->string('id_tarjeta')->unique();
            $table->string('gaveta');
            $table->integer('disciplina');
            $table->string('tamano')->nullable();
            $table->integer('unidad')->nullable();
            $table->string('tipo_documento')->nullable();
            $table->integer('imagenes')->nullable();
            $table->string('observacion')->nullable();
            $table->string('PDF')->nullable();
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
        Schema::dropIfExists('tarjetas');
        Schema::dropIfExists('gavetas');
    }
}
