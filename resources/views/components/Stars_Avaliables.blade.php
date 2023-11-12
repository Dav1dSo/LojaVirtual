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
    <form action="#" method="POST" class="mt-5 ">
        <div class="rating">
            <input type="radio" name="star" id="star1"><label for="star1"></label>
            <input type="radio" name="star" id="star2"><label for="star2"></label>
            <input type="radio" name="star" id="star3"><label for="star3"></label>
            <input type="radio" name="star" id="star4"><label for="star4"></label>
            <input type="radio" name="star" id="star5"><label for="star5"></label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Deixe sua avaliação.</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <div class="d-flex justify-content-end mt-1">
                <button class="btn btn-secondary m-2 ms-5" id="back">Voltar</button>
                <button class="btn btn-success m-2">Enviar</button>
            </div>
        </div>
    </form>
</body>

</html>
