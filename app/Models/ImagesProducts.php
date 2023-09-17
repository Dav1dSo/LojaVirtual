<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProducts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'idProduct', 'path'
    ];
}
