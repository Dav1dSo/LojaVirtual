<div id="wrap" class="col d-flex">
    @foreach ($FilterProducts as $product)
    <div class="product-card mb-5 m-3">
            <div class="product-tumb">
                <img src="{{ url("storage/" . $product->imagesProducts[0]->path) }}">
            </div>
            <div class="product-details">
                <h4>{{ $product->nome }}</h4>
                <p class="limitedDesc">{{ $product->descricao }}</p>
                <div class="product-bottom-details d-flex justify-content-between">
                    <h4 class="product-price">{{ $product->valor }}</h4>
                    <a href="showProduct/{{ $product->id }}" type="button"
                        class="text-decoration-none link-secondary">Visualizar</a>
                </div>
            </div>
        </div>
    @endforeach
</div> 
