<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado')->useCurrent();
            $table->timestamp('actualizado')->useCurrentOnUpdate()->nullable(true);
            $table->timestamp('eliminado')->nullable(true);
            $table->string('nombre',60);
            $table->text('descripcion');
            $table->string('imagen_principal',255);
            $table->char('tipo',1);
            $table->boolean('es_recurrente');
            $table->string('dias',20);
            $table->timestamp('fecha_inicio')->nullable(true);;
            $table->timestamp('fecha_finalizacion')->nullable(true);
            $table->foreignId('instalacion_id')->constrained('instalacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
