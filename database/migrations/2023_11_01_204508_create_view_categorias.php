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
        DB::statement("
            create or replace view `view_categories_products` as
            select
                `cp`.`categoria` as `categoria`
            from
                `categories_products` `cp`
            order by
                `cp`.`created_at` desc;
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_categories_products');
    }
};
