<?php

namespace App\Repository;

use App\Interfaces\ProductsRepositoryInterface;
use App\Models\Products;

class ProductRepository implements ProductsRepositoryInterface
{
    public function getAllProducts() 
    {
        return Products::all();
    }

    public function getProductById($id) 
    {
        return Products::findOrFail($id);
    }

    public function deleteProduct($id) 
    {
        Products::destroy($id);
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
}