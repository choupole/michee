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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id('IdResp');
            $table->string('email', 40);
            $table->string('Prenom', 25);
            $table->string('Nom', 25);
            $table->string('Postnom', 25);
            $table->string('Sexe', 1);
            $table->string('Pseudo', 40);
            $table->string('Role', 10);
            $table->binary('PhotoProfil')->nullable();
            $table->string('password', 64);
            $table->string('AgeResp', 4);
            $table->string('Descript', 50);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsables');
    }
};
