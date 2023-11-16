<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     
     */
    public function up(): void
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id('id_pelicula');
            $table->string('titulo',100);
            $table->string('artistas_principales',100);
            $table->integer('año');
            $table->string('productora',100);
            $table->string('genero',100);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
