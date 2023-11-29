<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class TotalCart extends Model
{
    use HasFactory;

    public $fillable = ['totalCart', 'IdUser'];

    /**
     * Get the CartTotal that owns the TotalCart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function UserCart(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
