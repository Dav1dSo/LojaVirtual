<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/ShowProduct.css') }}">
    <title>{{ $product->nome }}</title>
</head>

<body>
    <div class="container">
        <div class="imgBx">
            <img src="{{ url("storage/$product->imagem") }}" alt="Nike Jordan Proto-Lyte Image">
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

                <div>
                    <div class="reviews">
                        <ul class="stars">
                            <li><i class="fa fa-star">f</i></li>
                            <li><i class="fa fa-star">f</i></li>
                            <li><i class="fa fa-star">f</i></li>
                            <li><i class="fa fa-star">f</i></li>
                            <li><i class="fa fa-star-o">f</i></li>
                        </ul>
                        <span>(64 reviews)</span>
                    </div>
                </div>

                <div>
                    <h3>{{ $product->valor }}</h3>
                </div>
                <button>Adicionar ao carrinho</button>
            </div>
        </div>
    </div>

    <script></script>

</body>

</html>
