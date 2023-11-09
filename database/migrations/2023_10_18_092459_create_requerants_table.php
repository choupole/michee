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
        Schema::create('requerants', function (Blueprint $table) {
            $table->id('NumReq');
            $table->string('email', 40);
            $table->string('Prenom', 25);
            $table->string('Nom', 25);
            $table->string('Postnom', 25);
            $table->string('Sexe', 1);
            $table->string('PhotoProfil');
            $table->string('password', 64);
            $table->string('AgeResp', 4);
            $table->string('Role', 10);
            $table->string('Descript', 50);
            $table->date('DateCreat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerants');
    }
};
