<div class="row row-cols-1 row-cols-md-4 p-3" id="wrap">
    @foreach ($gallery as $imageProduct)
        <div class="col-md-3 mb-5">
            <div class="card">
                <img style="height: 20vh;" src="{{ url("storage/$imageProduct->imagem") }}" class="card-img-top imgProduct" alt="...">
                <div class="p-3 d-flex justify-content-end">
                    <div class="d-none AfterClick{{ $imageProduct->id }}">
                        <form id="formUpdateImage" enctype="multipart/form-data" method="POST" action="/galleyProducts/update/{{ $imageProduct->id }}">
                            @csrf 
                            <div class="d-flex justify-content-end">
                                <input type="file" class="form-control @error('imagem') is-invalid @enderror " id="imagem" name="imagem">
                                <div class="d-flex">
                                    <button type="button" class="btn btn-secondary ms-2"
                                        onclick="BackEdit({{ $imageProduct->id }})">Voltar</button>
                                    <button type="submit" class="btn btn-success ms-2">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="button" class="btn btn-success BeforeClick{{ $imageProduct->id }}"
                        onclick="ClickEdite({{ $imageProduct->id }})">Editar</button>
                        <form method="post" action="/galleyProducts/delete/{{ $imageProduct->id }}">
                            @csrf
                            <button type="submit" class="btn btn-danger ms-2 BeforeClick{{ $imageProduct->id }}">Excluir</button>
                        </form>
                </div>
                <div class="card-footer">
                    <small class="d-flex justify-content-start text-body-secondary">Atualizado em {{ $imageProduct->atualizado }}</small>
                </div>
            </div>
        </div>
    @endforeach
</div> 


