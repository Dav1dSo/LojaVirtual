<?php

namespace App\Http\Controllers\BuyProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ProductsRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

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

        $quantItems = count($myCart);

        $cart = $myCart->toArray();

        $cartId = $cart[0]->id;
        $cartUser = $cart[0]->Cart_IdUser;

        return view('Cart.CartShopping', [
            'myCart' => $myCart,
            'count' => $quantItems,
            'cartId' => Crypt::encrypt($cartId),
            'CartIdUser' => Crypt::encrypt($cartUser),

        ]);
    }

    public function CalcTotal($idCart, $idUser) {

        $idCart = Crypt::decrypt($idCart);
        $idUser = Crypt::decrypt($idUser);

        $precos = DB::table('cart_shoppings')->where('Cart_IdUser', $idUser)->select('preco')->get()->toArray();


        function converterParaNumero($valor) {
            $valorProduct = str_replace(['R$', ',', '.'], '', $valor);
            return $valorProduct = (float) $valorProduct;
        }

        // Inicializar a variável para armazenar a soma
        $soma_precos = 0;

        // Calcular a soma dos preços convertidos
        foreach ($precos as $preco) {
            $soma_precos += converterParaNumero($preco->preco);
        }

        return $soma_precos = number_format($soma_precos / 100, 2, ',', '.');

    }
}
