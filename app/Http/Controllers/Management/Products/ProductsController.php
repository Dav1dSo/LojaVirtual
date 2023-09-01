<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ProductRequest;
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
        return view('management.Produtos');
        // return $this->ProductsRepository->getAllProducts();
    }
    public function CreateProductForm(Request $request) {
        return view('management.CreateProduct');
    }
    public function InsertProduct(ProductRequest $request) {

        // $insetProductData = [
        //     'nome' => $request->nome,
        //     'valor' => $request->valor,
        //     'descricao' => $request->descricao,
        //     'img' => $request->img,
        //     'categoria' => $request->categoria,
        //     'estoque' => $request->estoque,
        // ];

        return $request->all();
    }
}


