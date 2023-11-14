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
        Schema::create('avaliable_products', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->unsignedBigInteger('avaliable_idProduct');
            $table->integer('stars');
            $table->foreign('avaliable_idProduct')->references('id')->on('products')->onDelete('cascade');
            $table->text('textAvaliaction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliable_products');
        $table->foreignId('avaliable_id')->constrained()->onDelete('cascade');

    }
};
