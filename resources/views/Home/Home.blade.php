<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/CardProduct.css') }}">
    <title>Full-Ecommerce</title>
    @include('includes.headerbootstrap')

</head>
<style>

    * { margin: 0, padding: 0 }

    #Carrossel { margin-top: 9vh; }

    #imgCarrossel {
        height: 75vh;
        width: 100vw;
    }


    .cardProduct {
        min-width: 90px;
    }

    .limitedArt {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
    }

    .limitedDesc {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .cardImg {
        height: 40vh;
    }

</style>

<body>
    <div class="position-relative">
        @include('includes.navbar')

        <div id="Carrossel">@include('Home.CarrosselCategories')</div>

        <div id="destaques">@include('Home.Destaques')</div>

        @include('Home.NavCategories')

        <div id="ProductsFiltred" class="mt-5"></div>

        @include('includes.footer')
    </div>
</body>
    @include('includes.scriptsbootstrap')
    <script src="{{ asset('js/functions/FilterProductByCategorie.js') }}"></script>

</html>
