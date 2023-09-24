<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class ImagesProducts extends Model
{
    use HasFactory;

    protected $primaryKey = 'products_id';

    protected $fillable = [
        'products_id', 'path'
    ];


    public function Products() {
        return $this->belongsTo(Products::class);
    }
}
