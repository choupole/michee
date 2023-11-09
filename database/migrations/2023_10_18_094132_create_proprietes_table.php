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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id('NumProp');
            $table->string('DesignProp', 30);
            $table->string('Descript', 40);
            $table->string('Image1', 100);
            $table->string('Image2', 100)->nullable();
            $table->string('Image3', 100)->nullable();
            $table->string('TypeProp', 20);
            $table->unsignedBigInteger('CodCat'); // Clé étrangère

            $table->foreign('CodCat')->references('CodCat')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
