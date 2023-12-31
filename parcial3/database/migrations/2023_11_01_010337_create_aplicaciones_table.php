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
        Schema::create('aplicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('dosis_id');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('dosis_id')->references('id')->on('dosis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicaciones');
    }
};
