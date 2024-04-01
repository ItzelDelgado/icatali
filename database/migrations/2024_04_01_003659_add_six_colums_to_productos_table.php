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
        Schema::table('productos', function (Blueprint $table) {
            //
            $table->string('nombre')->after('id');
            $table->string('descripcion',2500);
            $table->string('beneficios',2500);
            $table->string('ingredientes',2500);
            $table->double('precio');
            $table->double('precio_descuento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            //
            $table->dropColumn('nombre');
            $table->dropColumn('descripcion');
            $table->dropColumn('beneficios');
            $table->dropColumn('ingredientes');
            $table->dropColumn('precio');
            $table->dropColumn('precio_descuento');
        });
    }
};
