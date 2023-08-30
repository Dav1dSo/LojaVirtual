<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CreateProduct</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.headerbootstrap')
</head>

<style>
    #form_create {
        margin-top: 9rem;
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
    }

    form {}
</style>

<body>
    @include('includes.navbar')
    <div id="form_create" class="container w-50 p-4">
        <div class="col-lg-12 my-3">
            <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong
                        class="text-info">Ecommerce</strong></a></h1>
            <p class="text-center lead">Novo produto</p>
        </div>
        <div class="d-flex justify-content-center">
            <form method="POST" action="{{ route('insert_product') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome do produto:">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" id="valor" placeholder="Valor R$:">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" placeholder="Descrição do produto:" rows="4"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="imagem">Imagem</label>
                        <input type="file" class="form-control" id="imagem">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" class="form-control">
                            <option selected>Selecione...</option>
                            <option>Eletrônico</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estoque">Estoque</label>
                        <input type="number" class="form-control" id="estoque" placeholder="0">
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-secondary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</body>
@include('includes.scriptsbootstrap')

</html>
