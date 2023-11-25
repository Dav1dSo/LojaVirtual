<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function Payment() {
        return view('components.Payment');
    }
}
