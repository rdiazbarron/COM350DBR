<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 'id_funcion',
        
     * 
     */
    public function up(): void
    {
        Schema::create('funcions', function (Blueprint $table) {
            $table->id('id_funcion');
            $table->unsignedBigInteger('id_pelicula');
            $table->unsignedBigInteger('id_sala');
            $table->date('fecha');
            $table->time('hora');
            $table->decimal('precio',8,2);
            $table->string('estado',100);
            $table->foreign('id_pelicula')->references('id_pelicula')->on('peliculas');
            $table->foreign('id_sala')->references('id_sala')->on('salas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcions');
    }
};
