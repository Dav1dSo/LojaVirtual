<nav class="nav justify-content-center bg-light">
    @foreach ($NavCategorias as $item)
        <button id="filter" name="{{ $item->categoria }}" class="nav-link text-dark">{{ $item->categoria }}</button>
    @endforeach
</nav>


