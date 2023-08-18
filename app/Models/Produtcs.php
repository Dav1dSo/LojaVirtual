<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtcs extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'valor', 'estoque', 'descricao', 'imagem'
    ];
}
