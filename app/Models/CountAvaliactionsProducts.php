<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class CountAvaliactionsProducts extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $primaryKey = 'product_id';

    public $fillable = ['quant_evaluated', 'product_id'];

    public function CountAvaliactionProducts() {
        return $this->belongsTo(Products::class);
    }

}

