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
        <div class="form-group col-md-8 m-auto mt-4">
            <div class="text-right mt-2 mb-3">
                <button class="btn btn-success">Criar artigo</button>
            </div>
            <div class="card text-center">
                <div class="card-header d-flex justify-content-center align-items-center">
                    <h4 class="mb-0">Artigos</h4>
                </div>
                @include('management.ViewsArticles.CardsArticlesManagement')
            </div>
        </div>
        
    </div>

    {{-- @include('includes.footer') --}}

</body>
@include('includes.scriptsbootstrap')

</html>
