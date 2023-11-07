<div id="wrap" class="col d-flex">
    @foreach ($FilterProducts as $product)
        <div class="product-card m-b-5 m-3">
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

