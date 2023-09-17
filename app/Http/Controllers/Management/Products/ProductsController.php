<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ProductRequest;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\ImagesProducts;

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
               
        $insetProductData = [
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'estoque' => $request->estoque,
        ];
        
        // $this->ProductsRepository->createProduct($insetProductData);
        
        if(!empty($request->imagem) && $request->imagem){ 
            $imagesProducts = new ImagesProducts();
            
            $imagesRequest = $request->allFiles()['imagem'];
            
            foreach ($imagesRequest as $fileImage) {
                $filepath = $fileImage->store('public/img/Products');
                
                $insertImageProduct = [
                    'idProduct' => 1,
                    'path' => $filepath,
                ];
                
                $imagesProducts::create($insertImageProduct);
                dd($insertImageProduct);
            }
        }


        return redirect('/products/list');
    }
                    
    public function EditeProductForm($id) {
        $productFind = $this->ProductsRepository->getProductById($id);
        return response()->json($productFind);

    }
}


