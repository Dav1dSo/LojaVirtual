<?php

namespace App\Interfaces;

interface ProductsRepositoryInterface 
{
    public function getAllProducts();
    public function getProductById($id);
    public function deleteProduct($id);
    public function createProduct(array $NewProduct);
    public function updateProduct($id, array $UpdateProduct);
    public function getFilterProducts();
    public function insertCategorie(array $NewCategorie);
}   