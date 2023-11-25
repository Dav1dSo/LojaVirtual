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
        Schema::create('cart_shoppings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Cart_IdUser');
            $table->foreign('Cart_IdUser')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome');
            $table->string('path');
            $table->integer('quantidade')->default(1);
            $table->string('preco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_shoppings');
        $table->foreignId('Cart_IdProduct')->constrained()->onDelete('cascade');

    }
};
