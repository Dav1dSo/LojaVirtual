<div class="position-relative">
    @include('includes.navbar')

    <div id="tableContainer">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link text-secondary border-bottom" href="{{ route('management') }}">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary border-bottom" href="#">Estoque</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary border-bottom" href="#">Usuários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary border-bottom" href="#">Financeiro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-secondary border-bottom" href="#">Pedidos</a>
            </li>
          </ul>
    </div>
</div>