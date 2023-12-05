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
        create or replace view view_avaliactions_users as
	        select
		        ap.avaliable_idProduct,
		        ap.user,
		        ap.stars,
		        ap.textAvaliaction as avaliacao,
		        date_format(str_to_date(ap.created_at, '%Y-%m-%d'), '%d/%m/%Y') as avaliado
	        from avaliable_products ap
		join products p on ap.avaliable_idProduct = p.id
        WHERE
            ap.deleted_at is NULL and
            p.deleted_at is NULL;
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
