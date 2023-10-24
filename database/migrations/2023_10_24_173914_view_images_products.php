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
        "create or replace
            algorithm = UNDEFINED view view_images_products as
        select
            p.id as id,
            ip.products_id as products_id,
            ip.path as imagem,
            date_format(str_to_date(ip.updated_at, '%Y-%m-%d'), '%d/%m/%Y') as `atualizado`
        from
            images_products ip
        join products p on p.id = ip.products_id;";
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_images_products');
    }
};
