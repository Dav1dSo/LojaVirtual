<?php

namespace App\Repository;

use App\Interfaces\ProductsRepositoryInterface;
use App\Models\Products;
use App\Models\CategoriesProducts;
use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductsRepositoryInterface
{
    public function getAllProducts() 
    {
        return Products::all();
    }

    public function getProductById($id) 
    {
        return DB::table('view_products')->find($id);
    }

    public function deleteProduct($id) 
    {
        return Products::where('id', $id)->delete();
    }

    public function createProduct(array $NewProduct) 
    {
        return Products::create($NewProduct);
    }

    public function updateProduct($id, array $UpdateProduto) 
    {
        return Products::whereId($id)->update($UpdateProduto);
    }

    public function getFilterProducts() 
    {
        return Products::where('is_fulfilled', true);
    }

    public function GetImagesProducts($id)
    {
        return DB::table('view_images_products')->where('products_id', $id)->get();
    }

    public function updateImageProduct($id, array $updateImageProduct){
        return DB::table('images_products')->where('id', $id)->update($updateImageProduct);
    }

    public function deleteImageProduct($idImage) {
        return DB::table('images_products')->where('id', $idImage)->delete();
    }

    public function InsertCategorie(array $NewCategorie) {
        return CategoriesProducts::create($NewCategorie);
    }
}   