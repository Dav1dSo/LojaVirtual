<?php

namespace App\Http\Controllers\BuyProduct;

use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\TotalCart;

class CartShopping extends Controller
{
    private ProductsRepositoryInterface $ProductsRepository;

    public function __construct(ProductsRepositoryInterface $ProductsRepository)
    {
        $this->ProductsRepository = $ProductsRepository;
    }

    public function CartShopping(Request $request)
    {
        $IdUser = $request->id;

        $newCart = [
            'Cart_IdUser' => $IdUser,
            'Cart_IdProduct' => $request->IdProduct,
        ];

        if (!DB::table('cart_shoppings')->where('Cart_IdProduct', $request->IdProduct)->where('Cart_IdUser', $IdUser)->first()) {
            $this->ProductsRepository->NewCartShopping($newCart);
        }

        $myCart = DB::table('view_shopping_cart')->where('IdUser', $IdUser)->get();
        $precos = DB::table('view_shopping_cart')->where('IdUser', $IdUser)->select('valor', 'quantidade')->get()->toArray();

        function ConvNumber($valor) {
            $valorProduct = str_replace(['R$', ',', '.'], '', $valor);
            return $valorProduct = (float) $valorProduct;
        }

        $soma_precos = 0;

        foreach ($precos as $preco) {
            $precoProduct = ConvNumber($preco->valor) * $preco->quantidade;
            $soma_precos += $precoProduct;
        }

        $DataAmount = [
            'IdUser' => $IdUser,
            'totalCart' => number_format($soma_precos / 100, 2, ',', '.')
        ];

        if(!TotalCart::where('IdUser', $IdUser)->get()) {
            $this->ProductsRepository->TotalCart($DataAmount);
        }

        $Amount = TotalCart::where('IdUser', $IdUser)->select('totalCart')->get();

        $Amount = !count($Amount) ? 0.0 : $Amount[0]->totalCart;

        $quantItems = count($myCart);

        $cart = $myCart->toArray();
        $cartId = $cart[0]->IdCart;
        $cartUser = $cart[0]->IdUser;

        return view('Cart.CartShopping', [
            'myCart' => $myCart,
            'count' => $quantItems,
            'cartId' => Crypt::encrypt($cartId),
            'CartIdUser' => Crypt::encrypt($cartUser),
            'amount' => $Amount
        ]);
    }

    public function CalcTotal($idProductCart, $IdUser, Request $request) {

        $IdUser = Crypt::decrypt($IdUser);
        $quantidadeDoPedido = $request->quantidade;
        $quantidade = (int) $quantidadeDoPedido;

        DB::table("cart_shoppings")->where('Cart_IdProduct', $idProductCart)->update(['quantidade' => $quantidade]);

        $precos = DB::table('view_shopping_cart')->where('IdUser', $IdUser)->select('valor', 'quantidade')->get()->toArray();

        function converterParaNumero($valor) {
            $valorProduct = str_replace(['R$', ',', '.'], '', $valor);
            return $valorProduct = (float) $valorProduct;
        }

        $soma_precos = 0;

        foreach ($precos as $preco) {
            $precoProduct = converterParaNumero($preco->valor) * $preco->quantidade;
            $soma_precos += $precoProduct;
        }

        $DataAmount = [
            'IdUser' => $IdUser,
            'totalCart' => number_format($soma_precos / 100, 2, ',', '.')
        ];

        TotalCart::where('IdUser', $IdUser)->update($DataAmount);

        $Amount = TotalCart::where('IdUser', $IdUser)->select('totalCart')->get();

        $res = [
            'preco' => number_format($soma_precos / 100, 2, ',', '.'),
            'amount' => $Amount
        ];

        return $res;
    }
}
