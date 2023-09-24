<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagesProducts;


class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'valor', 'estoque', 'descricao', 'imagem', 'categoria'
    ];

    public function imagesProducts() {
      return $this->hasMany(ImagesProducts::class);
    }
}
