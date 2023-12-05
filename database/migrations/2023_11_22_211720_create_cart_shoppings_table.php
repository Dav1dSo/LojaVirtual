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
            $table->unsignedBigInteger('Cart_IdProduct');
            $table->foreign('Cart_IdUser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Cart_IdProduct')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantidade')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_shoppings');
        $table->foreignId('Cart_IdUser')->constrained()->onDelete('cascade');
        $table->foreignId('Cart_IdProduct')->constrained()->onDelete('cascade');
    }
};
