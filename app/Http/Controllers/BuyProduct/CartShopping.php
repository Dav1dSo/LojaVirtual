<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProductsRepositoryInterface;


class CartShopping extends Controller
{
    private ProductsRepositoryInterface $ProductsRepository;

    public function __construct(ProductsRepositoryInterface $ProductsRepository)
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    public function CartShopping(Request $request) {


        $newCart = [
            'Cart_IdUser' => $request->id,
            'nome' => $request->nome,
            'path' => $request->imagem,
            'preco' => $request->preco,
        ];

        // dd( $newCart);


        $this->ProductsRepository->NewCartShopping($newCart);

        return view('Cart.CartShopping');
    }
}
