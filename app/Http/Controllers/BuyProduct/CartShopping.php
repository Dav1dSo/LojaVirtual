<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
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
        $newCart = [
            'categoria' => $request->categoria,
            'Cart_IdUser' => $request->id,
            'Cart_IdProduct' => $request->IdProduct,
            'nome' => $request->nome,
            'path' => $request->imagem,
            'preco' => $request->preco,
        ];

        if (!DB::table('cart_shoppings')->where('Cart_IdProduct', $request->IdProduct)->where('Cart_IdUser', $request->id)->first()) {
            $this->ProductsRepository->NewCartShopping($newCart);
        }

        $myCart = DB::table('cart_shoppings')->where('Cart_IdUser', $request->id)->get();
        $idUser = $request->id;
        $Amount = TotalCart::where('IdUSer', $idUser)->select('totalCart')->get();

        $quantItems = count($myCart);


        $cart = $myCart->toArray();
        $cartId = $cart[0]->id;
        $cartUser = $cart[0]->Cart_IdUser;

        return view('Cart.CartShopping', [
            'myCart' => $myCart,
            'count' => $quantItems,
            'cartId' => Crypt::encrypt($cartId),
            'CartIdUser' => Crypt::encrypt($cartUser),
            'amount' => $Amount[0]->totalCart
        ]);
    }

    public function CalcTotal($idProductCart, $idUser, Request $request) {

        $idUser = Crypt::decrypt($idUser);
        $quantidadeDoPedido = $request->quantidade;
        $quantidade = (int) $quantidadeDoPedido;

        DB::table("cart_shoppings")->where('id', $idProductCart)->update(['quantidade' => $quantidade]);

        $precos = DB::table('cart_shoppings')->where('Cart_IdUser', $idUser)->select('preco', 'quantidade')->get()->toArray();

        function converterParaNumero($valor) {
            $valorProduct = str_replace(['R$', ',', '.'], '', $valor);
            return $valorProduct = (float) $valorProduct;
        }

        $soma_precos = 0;

        foreach ($precos as $preco) {
            $preco = converterParaNumero($preco->preco) * $preco->quantidade;
            $soma_precos += $preco;
        }

        $UpdateAmount = [
            'IdUser' => $idUser,
            'totalCart' => number_format($soma_precos / 100, 2, ',', '.')
        ];

        !TotalCart::where('IdUSer', $idUser)->get() ? TotalCart::create($UpdateAmount) : TotalCart::where('IdUSer', $idUser)->update($UpdateAmount);;

        $Amount = TotalCart::where('IdUSer', $idUser)->select('totalCart')->get();

        $res = [
            'preco' => number_format($soma_precos / 100, 2, ',', '.'),
            'amount' => $Amount
        ];

        return $res;

    }
}
