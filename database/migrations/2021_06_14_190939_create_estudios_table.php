<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 500);
            $table->date('fecha_estudio');
            $table->enum('asistio', ['yes', 'no'])->nullable()->default('no');
            $table->date('fecha_entrega');
            $table->date('fecha_proximo_estudio');
            $table->date('fecha_revision_estudio');
            $table->binary('resultado');
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
        Schema::dropIfExists('estudios');
    }
}
