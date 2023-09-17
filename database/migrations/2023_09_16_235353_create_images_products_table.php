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
            $table->unsignedBigInteger('idProduct');
            $table->string('path');
            $table->timestamps();

            $table->foreign('idProduct')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images_products');
        $table->foreignId('idProduct')->constrained()->onDelete('cascade');

    }
};
