<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ProductRequest;
use App\Http\Requests\Management\ProductEditeRequest;
use App\Http\Requests\Management\ImagesProductsRequest;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\ImagesProducts;
use App\Models\Products;

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

        $this->ProductsRepository->createProduct($insetProductData);

        if(!empty($request->imagem) && $request->imagem){

            $newProduct = new Products();
            $latestProduct = $newProduct::orderBy('id', 'desc')->first();
            $idProduct = $latestProduct->id;
            $imagesProducts = new ImagesProducts();
            $imagesRequest = $request->allFiles()['imagem'];

            foreach ($imagesRequest as $fileImage) {
                $filepath = $fileImage->store('img/Products', 'public');

                $insertImageProduct = [
                    'products_id' => $idProduct,
                    'path' => $filepath,
                ];

                $imagesProducts::create($insertImageProduct);
            }
        }

        return redirect('/areaAdministrativa');
    }

    public function EditeProductForm($id) {
        $productFind = $this->ProductsRepository->getProductById($id);
        return response()->json($productFind);
    }

    public function EditeProduct($id, ProductEditeRequest $request) {
        
        $EditeProductData = [
            'nome' => $request->nome,
            'valor' => $request->valor,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'estoque' => $request->estoque,
        ];

        $this->ProductsRepository->updateProduct($id, $EditeProductData);

        return redirect()->back();
    }

    public function DeleteProduct($id) {
        $this->ProductsRepository->deleteProduct($id);
        return redirect()->back();
    }

    public function GalleryProducts($id) {
       $gallery = collect($this->ProductsRepository->GetImagesProducts($id));
       
       return view('management.GalleryProducts', ['gallery' => $gallery]);
    }

    public function GalleryProductsUpdate($id, ImagesProductsRequest $request) { 
        if($request->hasFile('imagem') && $request->imagem) {
            foreach ($request->file('imagem') as $imagem) {
                $prepareImagem = $imagem->store('img/Products', 'public');
                $uploadImage = ['path' => $prepareImagem];
            }
        }
        $this->ProductsRepository->updateImageProduct($id, $uploadImage);
        return redirect()->back();
    }

    public function GalleryProductsDelete($idImage) {
        $this->ProductsRepository->deleteImageProduct($idImage);
        return redirect()->back();
    }
}


