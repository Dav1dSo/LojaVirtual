<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Full-Ecommerce</title>
    @include('includes.headerbootstrap')

</head>
<style>

    * { margin: 0, padding: 0;}

    #Carrossel { margin-top: 9vh; }

    #imgCarrossel {
        height: 75vh;
        width: 100vw;
    }

    #destaques { margin-top: 8vh }

    .cardProduct {
        min-width: 90px;
    }

</style> 
    
<body>
    <div class="position-relative">
        @include('includes.navbar')

        <div id="Carrossel">@include('Home.CarrosselCategories')</div>
        
        <div id="destaques">@include('Home.Destaques')</div>

        @include('Home.FilterCategories')

        @include('includes.footer')
    </div>
</body>
    @include('includes.scriptsbootstrap')
</html>
