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
        Schema::create('normas_x_quejas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('norma_id')->nullable();
            $table->unsignedBigInteger('queja_id')->nullable();

            $table->foreign('norma_id')->references('id')->on('normas')->onDelete('set null');
            $table->foreign('queja_id')->references('id')->on('quejas')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normas_x_quejas');
    }
};
