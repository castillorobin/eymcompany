<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cotiencabezados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('empresa')->nullable();
            $table->string('direccion')->nullable();
            $table->string('orden')->nullable();
            $table->string('garantia')->nullable();
            $table->string('codigo')->nullable();
            $table->date('fecha')->nullable();
            $table->string('NCR')->nullable();
            $table->string('contacto1')->nullable();
            $table->string('contacto2')->nullable();
            $table->string('correo')->nullable();
            $table->integer('dias')->nullable();
            $table->integer('personas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotiencabezados');
    }
};
