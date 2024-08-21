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
        Schema::create('queja_x_propietarios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('estado_x_reclamo_id')->nullable();
            $table->unsignedBigInteger('queja_id')->nullable();
            $table->unsignedBigInteger('propietario_id')->nullable();

            $table->foreign('queja_id')->references('id')->on('quejas')->onDelete('cascade');
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('set null');
            $table->foreign('estado_x_reclamo_id')->references('id')->on('estado_x_reclamos')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queja_x_propietarios');
    }
};
