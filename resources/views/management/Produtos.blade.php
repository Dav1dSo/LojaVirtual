<!DOCTYPE html>
<html>

<head>
    <title>Área Administrativa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.headerbootstrap')
</head>

<style>
    #wrap-table {
        margin-top: 150px;
    }
    
    td:nth-child(4){
        max-width: 20vw;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

</style>

<body>
    @include('includes.navbar')
    <div class="container" id="wrap-table">
        @include('includes.navManagement')
        <a href="{{ route('new_product') }}"><button type="button" class="btn btn-success mb-3">Adicionar</button></a>
        <table class="text-center table table-striped table-light yajra-datatable" width="100%">
            <thead>
                <tr>
                    {{-- <th></th> --}}
                    <th scope="col">º</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                      </svg>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
    @include('includes.scriptsbootstrap')
    <script src="{{ asset('js/datatables/ProdutosDatatable.js') }}"></script>
</html>
