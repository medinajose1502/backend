<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_configuracion', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado')->useCurrent();
            $table->timestamp('actualizado')->useCurrentOnUpdate()->nullable(true);
            $table->timestamp('eliminado')->nullable(true);
            $table->string('nombre',40);
            $table->text('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_configuracion');
    }
}
