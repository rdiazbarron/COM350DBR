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
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('titulo', 100); 
            $table->string('autor', 100);
            $table->unsignedBigInteger('editorial_id')->nullable();
            $table->integer('edicion');
            $table->string('pais', 100);
            $table->decimal('precio', 8, 2);
            $table->foreign('editorial_id')->references('id_editorial')->on('editorials');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
