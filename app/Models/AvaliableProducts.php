<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class AvaliableProducts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'avaliable_idProduct';

    protected $fillable = ['stars', 'textAvaliaction', 'user', 'avaliable_idProduct', 'quant_evaluated'];

    public function Product_Avaliable() {
        return $this->belongsTo(Products::class);
    }
}
