$(function () {
    var table = $('.yajra-datatable').DataTable({
        select: true,    
        processing: true,
        serverSide: true,
        order: [[1, 'asc']],    
        ajax: "/products/list",
        responsive: true,
        "language": {
            "lengthMenu": "Exibir _MENU_ itens por página",
            "zeroRecords": "Nothing found - sorry",
            "info": "Exibindo _PAGE_ página de _PAGES_.",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},  
            // { data: 'id', name: 'id' },
            { data: 'nome', name: 'nome' },
            { data: 'valor', name: 'valor' },
            { data: 'descricao', name: 'descricao' },
            { data: 'estoque', name: 'estoque' },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true,                  
                // 'render': function (data, type, full, meta){
                //     return '<input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '">';
                // },
            },
        ]
    });
});
