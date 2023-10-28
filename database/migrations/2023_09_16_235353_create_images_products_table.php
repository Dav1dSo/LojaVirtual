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
        Schema::create('images_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('products_id');
            $table->string('path');
            $table->timestamps();
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_products');
        $table->foreignId('products_id')->constrained()->onDelete('cascade');
    }
};
