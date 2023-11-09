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
        Schema::create('posters', function (Blueprint $table) {
            $table->date('DatePoste');
            $table->string('Emplacement', 50);
            $table->text('Caracteristiques');
            $table->text('Details');
            $table->unsignedBigInteger('IdResp');
            $table->unsignedBigInteger('NumProp');
            $table->timestamps();

            $table->foreign('IdResp')->references('IdResp')->on('responsables')->onDelete('cascade');
            $table->foreign('NumProp')->references('NumProp')->on('proprietes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posters');
    }
};
