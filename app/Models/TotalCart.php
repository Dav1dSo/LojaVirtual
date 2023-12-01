<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CartShopping;

class TotalCart extends Model
{
    use HasFactory;

    public $fillable = ['totalCart', 'IdUser'];

    public function UserCart(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
