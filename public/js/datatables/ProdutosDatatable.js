$(function () {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/products/list",
        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex'},  
            { data: 'id', name: 'id' },
            { data: 'nome', name: 'nome' },
            { data: 'valor', name: 'valor' },
            { data: 'estoque', name: 'estoque' },
            { data: 'descricao', name: 'descricao' },
            { data: 'imagem', name: 'imagem' },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });
});