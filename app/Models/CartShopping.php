<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CartShopping extends Model
{
    use HasFactory;
    
    protected $fillable = [ 'quantidade', 'Cart_IdUser', 'nome', 'preco', 'path' ];

    public function Users() {
        return $this->belongsTo(User::class);
    }

}
