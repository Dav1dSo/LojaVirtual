<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edite Produto</title>
    @include('includes.headerbootstrap')

</head>

<body>


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
    </style>

    <body>

        @include('includes.navbar')
        <div id="form_create" class="container w-5 p-4">
            <div class="col-lg-12 my-3">
                <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong
                            class="text-info">Ecommerce</strong></a></h1>
                <p class="text-center lead">Edite o produto</p>
            </div>
            <div class="d-fle justify-content-center">
                <form method="POST" action="/product/edit/{{ $dataProducts->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input value="{{ $dataProducts->nome }}" type="text"
                                class="form-control @error('nome') is-invalid @enderror " id="nome"
                                placeholder="Nome do produto:" name="nome">
                            @error('nome')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="valor">Valor</label>
                            <input value="{{ $dataProducts->valor }}" type="text"
                                class="form-control  @error('valor') is-invalid @enderror " id="valor"
                                placeholder="R$:" name="valor">
                            @error('valor')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control @error('descricao') is-invalid @enderror" id="descricao"
                            placeholder="Descrição do produto:" rows="4" name="descricao">{{ $dataProducts->descricao }}</textarea>
                        @error('descricao')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mt-2">
                            <div class="d-flex justify-content-between">
                                <label for="categoria">Categoria</label>
                                @include('components.ButtonAddCategorie')
                            </div>
                            @include('components.input-select-categorie')
                        </div>
                        <div class="form-group col-md-6 mt-2">
                            <label for="estoque">Estoque</label>
                            <input value="{{ $dataProducts->estoque }}" type="number"
                                class="form-control @error('estoque') is-invalid @enderror" id="estoque"
                                placeholder="0" name="estoque">
                            @error('estoque')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 mt-4">
                            <div class="card text-center">
                                <div class="card-header">Imagens</div>
                                @include('management.EditeImagesProducts')
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <button id="submitData" type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>

</body>
@include('includes.scriptsbootstrap')
<script src="{{ asset('js\Helpers/Mask/Masks.js') }}"></script>
<script src="{{ asset('js/AddCategorie.js') }}"></script>

<script>
    function ClickEdite(id) {
        const element = $(".BeforeClick" + id);
        element.addClass("d-none");

        const edit = $(".AfterClick" + id);
        edit.removeClass("d-none").addClass("d-block");
    };

    function BackEdit(id) {
        const edit = $(".AfterClick" + id);
        edit.removeClass("d-block").addClass("d-none");

        const element = $(".BeforeClick" + id);
        element.removeClass("d-none");
    }

    // $(document).on('click', '#submitData', function(event) {
    //     event.preventDefault();
    //     const idProduct = $("#idProduct").val();

    //     $.ajax({

    //         method: "POST",
    //         url: `/product/edit/${idProduct}`,
    //         data: {
    //             nome: $("#nome").val(),
    //             valor: $("#valor").val(),
    //             descricao: $("#descricao").val(),
    //             categoria: $("#categoria").val(),
    //             estoque: $("#estoque").val(),
    //         },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    //         },
    //         success: function() {
    //             history.go();
    //         }

    //     })  
    // });
</script>

</html>
