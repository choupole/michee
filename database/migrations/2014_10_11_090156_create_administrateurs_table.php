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
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id('IdAdmin');
            $table->string('email', 40);
            $table->string('username', 25);
            $table->string('Prenom', 25);
            $table->string('Nom', 25);
            $table->string('Postnom', 25);
            $table->string('Sexe', 1);
            $table->string('Pseudo', 40);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('password', 64);
            $table->string('Role', 10);
            $table->date('DateCreat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
    }
};
