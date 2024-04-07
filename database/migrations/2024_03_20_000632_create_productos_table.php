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
            $table->string('nombre');
            $table->string('descripcion',2500);
            $table->string('beneficios',2500)->nullable();
            $table->string('ingredientes',2500)->nullable();
            $table->double('precio');
            $table->double('precio_descuento')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('img_path_principal')->nullable();
            $table->string('img_path_paquete')->nullable();
            $table->string('img_path_izq')->nullable();
            $table->string('img_path_der')->nullable();
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
