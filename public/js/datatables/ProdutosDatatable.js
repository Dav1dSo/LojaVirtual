$(function () {
    var table = $('.yajra-datatable').DataTable({
        select: true,    
        processing: true,
        serverSide: true,
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
            {
                targets: 0,
                checkboxes: {
                   selectRow: true
                }
             },
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
            },
        ],
        'select': {
            'style': 'multi'
         },
         'order': [[1, 'asc']]
    });
});

var rows_selected = table.column(0).checkboxes.selected();

      // Iterate over all selected checkboxes
      $.each(rows_selected, function(index, rowId){
         // Create a hidden element
         $(form).append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );
      });