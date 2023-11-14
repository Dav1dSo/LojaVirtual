<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/AvaliableProduct.css') }}">
    <title>Avaliação de produto.</title>
</head>

<body>
    <form action="/avaliable/product/" method="post" class="mt-5">
        @csrf
        <input type="hidden" name="user" value="{{ Auth::user()->name }}">
        <input type="hidden" name="idProduct" value="{{ $product->id }}">
        <div class="rating">
            <input type="radio" name="star" value="5" id="star5"><label for="star5"></label>
            <input type="radio" name="star" value="4" id="star4"><label for="star4"></label>
            <input type="radio" name="star" value="3" id="star3"><label for="star3"></label>
            <input type="radio" name="star" value="2" id="star2"><label for="star2"></label>
            <input type="radio" name="star" value="1" id="star1"><label for="star1"></label>
        </div>
        <div class="form-group">
            <label name="avaliacao" class="@error('star') d-none @enderror" for="avaliacao">Deixe sua avaliação.</label>
            <textarea name="avaliacao" class="form-control" id="avaliacao" rows="5"></textarea>
            <div class="d-flex justify-content-end mt-1">
                <button class="btn btn-secondary m-2 ms-5" id="back">Voltar</button>
                <button type="submit" class="btn btn-success m-2">Enviar</button>
            </div>
        </div>
    </form>
</body>

</html>
