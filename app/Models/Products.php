<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AvaliableProducts;
use App\Models\ImagesProducts;
use App\Models\CartShopping;
use App\Models\CountAvaliactionProducts;


class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome', 'valor', 'estoque', 'descricao', 'imagem', 'categoria'
    ];

    public function imagesProducts() {
      return $this->hasMany(ImagesProducts::class);
    }

    public function AvaliactionsProducts() {
      return $this->hasMany(AvaliableProducts::class);
    }

    public function ProductsCountAvaliactions() {
      return $this->hasMany(CountAvaliactionProducts::class);
    }

    public function CartShopping() {
        return $this->hasMany(CartShopping::class);
    }
}
