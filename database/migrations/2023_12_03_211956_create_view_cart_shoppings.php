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

        DB::statement(
            "
            CREATE OR REPLACE ALGORITHM = UNDEFINED VIEW view_shopping_cart AS
                SELECT
                    p.nome AS nome,
                    p.categoria AS categoria,
                    p.id AS IdProduct,
                    u.id AS IdUser,
                    p.valor AS valor,
                    cs.quantidade AS quantidade,
                    cs.id AS IdCart,
                    MIN(ip.path) AS imagem
                FROM
                    (((teste.products p
                    JOIN teste.cart_shoppings cs ON (p.id = cs.Cart_IdProduct))
                    JOIN teste.users u ON (cs.Cart_IdUser = u.id))
                    LEFT JOIN teste.images_products ip ON (p.id = ip.products_id))
                WHERE
                    p.deleted_at IS NULL
                    AND cs.deleted_at IS NULL
                    AND u.deleted_at IS NULL
                GROUP BY
                    p.nome, p.categoria, p.id, u.id, p.valor, cs.quantidade, cs.id;
            "
        );
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_cart_shoppings');
    }
};
