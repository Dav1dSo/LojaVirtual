<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.headerbootstrap')
</head>

<style>
    #wrap-table {
        margin-top: 150px;
    }
</style>

<body>
    @include('includes.navbar')
    <div class="container" id="wrap-table">
        @include('includes.navManagement')
        <table class="text-center table table-bordered yajra-datatable" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th scope="col">º</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
        </table>
    </div>

</body>
@include('includes.scriptsbootstrap')
<script src="{{ asset('js/datatables/ProdutosDatatable.js') }}"></script>
<script type="text/javascript"
    src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script>

</html>
