<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ShowProduct.css') }}">
    @include('includes.headerbootstrap')
    <title>{{ $product->nome }}</title>
</head>

<body style="background: rgb(255, 255, 255)">

    @include('includes.navbar')

    {{-- {{dd($UserAvaliaction)}} --}}

    <div id="sectionProduct">
        <div class="wrap">
            <div class="imgBx">
                <img id="imgDestaque" src="{{ url("storage/$product->imagem") }}" alt="">
            </div>
            <div class="details">
                <div class="content">
                    <h2>{{ $product->nome }}<br>
                        <span>{{ $product->categoria }}</span>
                    </h2>
                    <p id="descricao">{{ $product->descricao }}</p>

                    <div>
                        @foreach ($imgProduct as $Img)
                            <i><img class="select_img" src="{{ url("storage/$Img->imagem") }}"alt=""></i>
                        @endforeach
                    </div>

                    <div class="classificacao">
                        <div class="reviews mt-3 ">
                            <ul class="stars">
                                @if ($classificacao > 0)
                                    @for ($i = 0; $i < $classificacao; $i++)
                                        <li><i class="fa fa-star"></i></li>
                                    @endfor
                                    @else
                                    <li><i id="fa-grey" class="fa fa-star"></i></li>
                                    <li><i id="fa-grey" class="fa fa-star"></i></li>
                                    <li><i id="fa-grey" class="fa fa-star"></i></li>
                                    <li><i id="fa-grey" class="fa fa-star"></i></li>
                                    <li><i id="fa-grey" class="fa fa-star"></i></li>
                                @endif
                            </ul>
                            @if (Auth::check() || Auth::viaRemember())
                                <a href="#" id="avaliableButton">Avaliar produto</a>
                            @else
                                <a href="{{ route('login') }}" class="text-decoration-none text-secondary ms-2">Avaliar
                                    produto</a>
                            @endif
                            @error('star')
                                <span class="text-danger">Selecione pelo menos uma estrela e tente novamente!</span>
                            @enderror
                        </div>
                        <span>(64 reviews)</span>
                    </div>

                    <div id="FormAvaliable" class="d-none">
                        @if (Auth::check() || Auth::viaRemember())
                            @include('components.Stars_Avaliables')
                        @endif
                    </div>
                    <div class="classificacao">
                        <h3>{{ $product->valor }}</h3>
                        <button class="btn btn-success m-2 ms-5">Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.CardsAvaliactionProduct')
    @include('includes.footer')
</body>
    @include('includes.scriptsbootstrap')
<script src="{{ asset('js/functions/Select_image.js') }}"></script>
<script src="{{ asset('js/functions/AvaliableProduct.js') }}"></script>

</html>
