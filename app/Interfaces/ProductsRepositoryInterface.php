<?php

namespace App\Interfaces;

interface ProductsRepositoryInterface 
{
    public function getAllProducts();
    public function getProductById($id);
    public function deleteProduct($id);
    public function createProduct(array $NewProduct);
    public function updateProduct($id, array $UpdateProduct);
    public function updateImageProduct($id, array $updateImageProduct);
    public function insertCategorie(array $NewCategorie);
    public function getCategories();
}   