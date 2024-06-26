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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre')->nullable();
            $table->string('DUI')->nullable();
            $table->date('Fehca_ingreso')->nullable();
            $table->string('Cargo')->nullable();
            $table->date('Nacimiento')->nullable();
            $table->string('Contacto')->nullable();
            $table->string('Parentesco')->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Direccion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
