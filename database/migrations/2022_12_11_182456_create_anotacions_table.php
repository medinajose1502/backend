<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacion', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado')->useCurrent();
            $table->timestamp('actualizado')->useCurrentOnUpdate()->nullable(true);
            $table->timestamp('eliminado')->nullable(true);
            $table->tinyInteger('valoracion');
            $table->foreignId('ronda_id')->constrained('ronda');
            $table->foreignId('jugador_id')->constrained('jugador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anotacion');
    }
}
