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
            algorithm = UNDEFINED view `view_products` as
        select
            p.id as id,
            p.nome as nome,
            p.valor as valor,
            p.estoque as estoque,
            p.descricao as descricao,
            p`.categoria as categoria,
            ip.path as imagem,
            date_format(str_to_date(p.updated_at, '%Y-%m-%d'), '%d/%m/%Y') as `atualizado`
        from
            products p
        join images_products ip on p.id = ip.products_id;";
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_products');
    }
};
