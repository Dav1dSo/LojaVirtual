<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    private ProductsRepositoryInterface $ProductsRepository;

    public function __construct(ProductsRepositoryInterface $ProductsRepository) 
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    public function index() {
        return $this->ProductsRepository->getAllProducts();
        // return view('management.Produtos');
    }

    public function CreateProductForm(Request $request) {
        return view('management.CreateProduct');
    }

    public function InsertProduct(Request $request) {
        return $request->all();
    }

}



