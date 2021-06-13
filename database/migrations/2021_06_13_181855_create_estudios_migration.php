<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_migration', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 500);
            $table->date('fecha_estudio');
            $table->enum('asistio', ['yes', 'no'])->nullable()->default('no');
            $table->date('fecha_entrega');
            $table->date('fecha_proximo_estudio');
            $table->date('fecha_revision_estudio');
            $table->blob('resultado');
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
        Schema::dropIfExists('estudios_migration');
    }
}
