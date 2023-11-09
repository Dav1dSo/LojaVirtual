<div id="wrap" class="col d-flex">
    @foreach ($FilterProducts as $product)
    <div class="product-card mb-5 m-3">
            <div class="product-tumb">
                <img src="{{ url("storage/$product->imagem") }}">
            </div>
            <div class="product-details">
                <h4>{{ $product->nome }}</h4>
                <p class="limitedDesc">{{ $product->descricao }}</p>
                <div class="product-bottom-details">
                    <div class="product-price">{{ $product->valor }}</div>
                    <a href="showProduct/{{ $product->id }}" type="button"
                        class="ms-3 btn btn-secondary">Visualizar</a>
                </div>
            </div>
        </div>
    @endforeach
</div> 
