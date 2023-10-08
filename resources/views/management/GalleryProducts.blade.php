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

    .imgProduct {
        height: 20rem;
    }
</style>

<body>
    @include('includes.navbar')


    <div class="row row-cols-1 row-cols-md-4 p-5" id="wrap">
        @foreach ($gallery as $imageProduct)
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img src="{{ url("storage/$imageProduct->imagem") }}" class="card-img-top imgProduct" alt="...">
                    <div class="p-3 d-flex justify-content-end">
                        <div class="d-none AfterClick{{ $imageProduct->id }}">
                            <div class="d-flex d-flex justify-content-end">
                                <input value="{{ old('imagem') }}" type="file"
                                    class="form-control @error('imagem') is-invalid @enderror " id="imagem"
                                    name="imagem[]" multiple>
                                @error('imagem')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div><button type="button" class="btn btn-success ms-2">Editar</button></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success BeforeClick{{ $imageProduct->id }}"
                            onclick="ClickEdite({{ $imageProduct->id }})">Editar</button>
                        <button type="button" class="btn btn-danger ms-2 BeforeClick{{ $imageProduct->id }}">Excluir</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Atualizado em {{ $imageProduct->atualizado }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>
@include('includes.scriptsbootstrap')   

</html>

<script>
    function ClickEdite(id) {
        const elements = $(".BeforeClick" + id);
        elements.attr('class', 'd-none');

        const edit = $(".AfterClick" + id);
        edit.attr('class', 'd-block')
    }
</script>
