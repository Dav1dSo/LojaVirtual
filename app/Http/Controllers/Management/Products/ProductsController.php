<?php

namespace App\Http\Controllers\Management\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\ProductRequest;
use App\Http\Requests\Management\CategorieRequest;
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
    }
    public function CreateProductForm(Request $request) {
        $categorias = $this->ProductsRepository->getCategories(); 
        return view('management.CreateProduct', ['categorias' => $categorias]);
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

    public function ShowProduct($id) {
        $showProduct = $this->ProductsRepository->getProductById($id);
        $showImages = $this->ProductsRepository->GetImagesProducts($id);
        return view('Home.ShowProduct', [
            'product' => $showProduct,
            'imgProduct' => $showImages
        ]);
    }

    public function EditeProductForm($id) {
        $categorias = $this->ProductsRepository->getCategories(); 
        $gallery = collect($this->ProductsRepository->GetImagesProducts($id));
        $dataProducts = $this->ProductsRepository->getProductById($id);
        return view('management.EditProduct', [
            'dataProducts' => $dataProducts,
            'gallery' => $gallery,
            'categorias' => $categorias
        ]);
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

        return redirect('areaAdministrativa');
    }

    public function DeleteProduct($id) {
        $this->ProductsRepository->deleteProduct($id);
        return redirect()->back();
    }

    public function FilterProductByCategorie($FilterCategorie) {
        $FilterProducts = $this->ProductsRepository->getFilterProducts($FilterCategorie);
        return view('Home.ProductsFiltred', ['FilterProducts' => $FilterProducts]);
    }


    public function AvaliableProduct(){
        return view('components.ProductAvaliable');
    }


    public function AddCategorie(CategorieRequest $request) {

        $categoria = ['categoria' => $request->NewCategorie];

        try {
            $this->ProductsRepository->InsertCategorie($categoria);
            return "Categoria adicionada com sucesso!";
        } catch (\Throwable $th) {
            return;
        }

        return redirect()->back();
    }

    public function GalleryProducts($id) {
       $gallery = collect($this->ProductsRepository->GetImagesProducts($id));
       return view('management.GalleryProducts', ['gallery' => $gallery]);
    }

    public function GalleryProductsUpdate($id, ImagesProductsRequest $request) { 
        if($request->hasFile('imagem') && $request->imagem) {
            $prepareImagem = $request->file('imagem')->store('img/Products', 'public');
            $uploadImage = ['path' => $prepareImagem];
        }
        $this->ProductsRepository->updateImageProduct($id, $uploadImage);
        return redirect()->back();
    }

    public function GalleryProductsDelete($idImage) {
        $this->ProductsRepository->deleteImageProduct($idImage);
        return redirect()->back();
    }
}


