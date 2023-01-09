<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directivo', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado')->useCurrent();
            $table->timestamp('actualizado')->useCurrentOnUpdate()->nullable(true);
            $table->timestamp('eliminado')->nullable(true);
            $table->string('posicion',50);
            $table->tinyInteger('prioridad');
            $table->foreignId('persona_id')->constrained('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directivo');
    }
};
