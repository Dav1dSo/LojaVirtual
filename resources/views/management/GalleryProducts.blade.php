<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <title>Gallery Products</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('includes.headerbootstrap')
    </head>
</head>

<style>
    #wrap {
        margin-top: 100px;
    }
</style>

<body>
    @include('includes.navbar')
    
    
    <div class="row row-cols-1 row-cols-md-4 p-5" id="wrap">

        @foreach ($gallery as $imageProduct)
        <div class="col-md-3 mb-5">
            <div class="card h-100">
                <img src="{{ url("storage/$imageProduct->imagem") }}" class="card-img-top h-75" alt="...">
            <div class="p-3 d-flex justify-content-end">
                <button type="button" class="btn btn-success">Editar</button>
                <button type="button" class="btn btn-danger ms-2">Excluir</button>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Atualizado em 21/29/2023</small>
            </div>
            </div>
        </div>
        @endforeach
    </div>

</body>
    @include('includes.scriptsbootstrap')
</html>




