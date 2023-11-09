<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id('Numpaie');
            $table->integer('Montpaie');
            $table->date('DatPaie');
            $table->unsignedBigInteger('IdDemande');
            $table->unsignedBigInteger('CodMod');
            $table->foreign('IdDemande')->references('IdDemande')->on('demanders')->onDelete('cascade');
            $table->foreign('CodMod')->references('CodMod')->on('modes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
