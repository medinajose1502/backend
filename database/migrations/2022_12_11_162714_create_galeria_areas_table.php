<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_area', function (Blueprint $table) {
            $table->id();
            $table->timestamp('creado')->useCurrent();
            $table->timestamp('actualizado')->useCurrentOnUpdate()->nullable(true);
            $table->timestamp('eliminado')->nullable(true);
            $table->string('url',255);
            $table->foreignId('area_id')->constrained('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria_area');
    }
}
