<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Support\Facades\DB;


class CartShopping extends Controller
{
    private ProductsRepositoryInterface $ProductsRepository;

    public function __construct(ProductsRepositoryInterface $ProductsRepository)
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    public function CartShopping(Request $request)
    {

        $newCart = [
            'categoria' => $request->categoria,
            'Cart_IdUser' => $request->id,
            'Cart_IdProduct' => $request->IdProduct,
            'nome' => $request->nome,
            'path' => $request->imagem,
            'preco' => $request->preco,
        ];

        //dd($newCart);

        if (!DB::table('cart_shoppings')->where('Cart_IdProduct', $request->IdProduct)->first()) {
            $this->ProductsRepository->NewCartShopping($newCart)->where();
        }

        $myCart = DB::table('cart_shoppings')->get();

        return view('Cart.CartShopping', ['myCart' => $myCart]);
    }
}
