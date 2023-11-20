<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        create or replace
        algorithm = UNDEFINED view view_avaliactions_users as
         select
             avaliable_idProduct as ReferProductId,
            user,
            stars,
            textAvaliaction as avaliacao,
            date_format(str_to_date(a.created_at , '%Y-%m-%d'), '%d/%m/%Y') as avaliado
            from avaliable_products a;
        inner join products p ON a.avaliable_idProduct = p.id ;
        ");
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_avaliactions_users');
    }
};
