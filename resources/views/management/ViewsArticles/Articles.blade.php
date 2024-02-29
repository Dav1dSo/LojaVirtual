<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('includes.headerbootstrap')
    <title>Artigos</title>
</head>

<style>
    #contentArticles {
        margin-top: 15vh;
    }
</style>

<body>
    @include('includes.navbar')


    <div id="contentArticles">
        <h1 class="text-center m-5 p-5 text-secondary">Página em desenvolvimento!</h1>
    </div>

    {{-- @include('includes.footer') --}}

</body>
@include('includes.scriptsbootstrap')
</html>
