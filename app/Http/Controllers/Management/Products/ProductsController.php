<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('management.Produtos');
    }

    public function CreateProduct(Request $request) {
        return view('management.CreateProduct');
    }

}



