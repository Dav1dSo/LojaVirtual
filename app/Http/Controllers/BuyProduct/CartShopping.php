<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartShopping extends Controller
{
    public function CartShopping() {
        return view('Cart.CartShopping');
    }
}
