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
        Schema::create('total_carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUser');
            $table->string('totalCart');
            $table->foreign('IdUser')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_carts');
        $table->foreignId('IdUser')->constrained()->onDelete('cascade');
    }
};
