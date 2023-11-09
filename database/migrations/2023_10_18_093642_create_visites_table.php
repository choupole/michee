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
        Schema::create('visites', function (Blueprint $table) {
            $table->id('IdVisite');
            $table->string('DesignVisite', 30);
            $table->string('TypeVisit', 30);
            $table->unsignedBigInteger('IdTarif'); // Clé étrangère
            $table->foreign('IdTarif')->references('IdTarif')->on('tarifs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visites');
    }
};
