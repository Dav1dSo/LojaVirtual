<div class="col d-flex mb-5">
    @foreach ($FilterProducts as $product)
        <div class="product-card">
            <div class="badge">Hot</div>
            <div class="product-tumb">
                <img src="{{ url("storage/$product->imagem") }}">
            </div>
            <div class="product-details">
                <h4><a href="">{{ $product->nome }}</a></h4>
                <p class="limitedDesc">{{ $product->descricao }}</p>
                <div class="product-bottom-details">
                    <div class="product-price">{{ $product->valor }}</div>
                    <div>
                        <button type="button" class="btn btn-secondary">Visualizar</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>



{{-- @foreach ($FilterProducts as $product)
        <div class="card m-3 w-100">
            <img class="w-100 h-50" src="{{ url("storage/$product->imagem") }}"
            class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->nome }}</h5>
                <p class="card-text limitedDesc">{{ $product->descricao }}</p>
                <a href="#" class="btn btn-primary">Ver Produto</a>
            </div>
        </div>
    @endforeach --}}
</div>
