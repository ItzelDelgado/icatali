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
            if (!Schema::hasColumn('productos', 'slug')) {  // Verificar si la columna no existe
                $table->string('slug')->unique()->after('img_path_der'); // Añade 'slug' después de 'img_path_der'
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            if (Schema::hasColumn('productos', 'slug')) {  // Verificar si la columna existe antes de eliminarla
                $table->dropColumn('slug'); // Elimina la columna 'slug' en caso de rollback
            }
        });
    }
};
