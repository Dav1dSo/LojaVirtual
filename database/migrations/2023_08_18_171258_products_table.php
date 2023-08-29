<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('valor')->nullable();
            $table->integer('estoque')->nullable()->default(0);
            $table->string('descricao')->nullable();
            $table->string('categoria')->nullable();
            $table->string('imagem')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_table');

    }
};