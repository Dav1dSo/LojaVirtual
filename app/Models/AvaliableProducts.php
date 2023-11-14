<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class AvaliableProducts extends Model
{
    use HasFactory;

    protected $primaryKey = 'avaliable_idProduct ';

    protected $fillable = ['stars', 'textAvaliaction', 'user', 'avaliable_idProduct'];

    public function Product_Avaliable() {
        return $this->belongsTo(Products::class);
    }
}
 