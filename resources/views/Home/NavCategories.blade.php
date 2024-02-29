<nav class="nav justify-content-center bg-light mt-5">
    @foreach ($NavCategorias as $item)
        <button id="filter" name="{{ $item->categoria }}" class="nav-link text-dark">{{ $item->categoria }}</button>
    @endforeach
</nav>
