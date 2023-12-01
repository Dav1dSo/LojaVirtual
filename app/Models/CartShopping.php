<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\TotalCart;

class CartShopping extends Model
{
    use HasFactory;

    protected $fillable = ['categoria', 'Cart_IdProduct', 'quantidade', 'Cart_IdUser', 'nome', 'preco', 'path' ];

    public function Users() {
        return $this->belongsTo(User::class);
    }
}
