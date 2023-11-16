<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AvaliableProducts;
use App\Models\ImagesProducts;
use App\Models\CountAvaliactionProducts;


class Products extends Model
{
    use HasFactory;

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
  }