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
        Schema::create('demanders', function (Blueprint $table) {
            $table->id('IdDemande');
            $table->date('DatDemande');
            $table->time('HeureDemande');
            $table->unsignedBigInteger('IdVisite');
            $table->unsignedBigInteger('NumReq');
            $table->timestamps();
        });

        Schema::table('demanders', function (Blueprint $table) {
            $table->foreign('IdVisite')
                  ->references('IdVisite')
                  ->on('visites')
                  ->onDelete('cascade');

            $table->foreign('NumReq')
                  ->references('NumReq')
                  ->on('requerants')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demanders');
    }
};
