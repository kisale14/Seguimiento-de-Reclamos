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
        Schema::create('propietarios_x_apartamentos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('residentes');

            $table->unsignedBigInteger('apartamento_id')->nullable();
            $table->unsignedBigInteger('propietario_id')->nullable();

            $table->foreign('apartamento_id')->references('id')->on('apartamentos')->onDelete('set null');

            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietarios_x_apartamentos');
    }
};
