<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TotalCart;
use App\Models\Products;

class CartShopping extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['categoria', 'Cart_IdProduct', 'quantidade', 'Cart_IdUser', 'nome', 'preco', 'path' ];

    public function Users() {
        return $this->belongsTo(User::class);
    }

    public function Products() {
        return $this->belongsTo(Products::class);
    }
}
