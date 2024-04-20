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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->nullable();
            $table->string('Descripcion')->nullable();
            $table->string('Categoria')->nullable();
            $table->string('Proveedor')->nullable();
            $table->string('Precio')->nullable();
            $table->string('Cantidad')->nullable();
            $table->string('Unidad_medida')->nullable();
            $table->double('Revision')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
