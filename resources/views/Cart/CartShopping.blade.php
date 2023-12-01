<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/CartShopping.css') }}">
    <title>Resumo de compras</title>
    @include('includes.headerbootstrap')
</head>

<body>
    @include('includes.navbar')
    <div id="wrap">
        <section class="h-100 h-custom" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h5 class="mb-3">
                                            <a href="#" class="text-body">
                                                <i class="fas fa-long-arrow-alt-left me-2">Continuar comprando</i>
                                            </a>
                                        </h5>
                                        <hr>
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div>
                                                <p class="mb-1">Seus produtos.</p>
                                                <p class="mb-0">Você tem {{ $count }} itens no carrinho.</p>
                                            </div>
                                        </div>
                                        @foreach ($myCart as $infoProduct)
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-row align-items-center">
                                                            <input id="CartIdUser" style="display: none" type="hidden"
                                                                name="CartIdUser" value="{{ $CartIdUser }}">
                                                            <input id="cartId" style="display: none" type="hidden"
                                                                name="cartId" value="{{ $cartId }}">
                                                            <div>
                                                                <img src="{{ $infoProduct->path }}"
                                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                                    style="width: 65px;">
                                                            </div>
                                                            <div class="ms-3">
                                                                <h5>Ip{{ $infoProduct->nome }}</h5>
                                                                <p class="small mb-0">{{ $infoProduct->categoria }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center mr-5">
                                                            <div style="width: 50px;" class="d-flex">
                                                                <button name="subtrair" id="{{ $infoProduct->id }}" class="count rounded-5 border-0 p-2 mr-2 text-danger fs-4">-</button>
                                                                <h5 id="quantidade{{ $infoProduct->id }}" class="quantidade fw-normal mt-3 border-bottom">{{ $infoProduct->quantidade }}</h5>
                                                                <button name="adicionar" id="{{ $infoProduct->id }}" class="count rounded-5 border-0 p-1 text-success fs-4 ms-3">+</button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row align-items-center">
                                                            <h5 class="precos mb-0">{{ $infoProduct->preco }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="card bg-secondary text-white rounded-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-4">
                                                    <h5 class="mb-0">Resumo do pedido</h5>
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                                </div>
                                                <hr class="my-4">
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-2">Subtotal</p>
                                                    <p id="totaProdutos" class="mb-2 amount">R$ {{ $amount }}</p>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-2">Envio</p>
                                                    <p class="mb-2">R$ 00.00</p>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                    <h4 class="mb-2">Total(Incl. taxas)</h4>
                                                    <h4 class="mb-2 amount">R$ {{ $amount }}</h4>
                                                </div>
                                                <button type="button" class="btn btn-light btn-block btn-lg">
                                                    <div class="text-center">
                                                        <span>Realizar compra
                                                            <i class="fas fa-long-arrow-alt-right ms-2"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<footer style="margin-top: 20vh">
    @include('includes.footer')
</footer>


</body>

@include('includes.scriptsbootstrap')
<script src="{{ asset('js/functions/Count.js') }}"></script>
<script src="{{ asset('js/functions/CalcTotal.js') }}"></script>

</html>
