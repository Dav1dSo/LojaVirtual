$(function () {
    var table = $('.yajra-datatable').DataTable({
        select: true,
        processing: true,
        serverSide: true,
        ajax: "/products/list",
        responsive: true,
        language: {
            "lengthMenu": "Exibir _MENU_ itens por página",
            "zeroRecords": "Nenhum resultado encontrado.",
            "info": "Exibindo _PAGE_ página de _PAGES_.",
            "infoEmpty": "Não há registros disponíveis.",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        columns: [
            // {
            //     targets: 0,
            //     checkboxes: {
            //         selectRow: true
            //     }
            // },
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            // { data: 'id', name: 'id' },
            { data: 'nome', name: 'nome' },
            { data: 'valor', name: 'valor' },
            { data: 'descricao', name: 'descricao' },
            { data: 'estoque', name: 'estoque' },
            { data: 'categoria', name: 'categoria' },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true,
            },
        ],
        // columnDefs: [{
        //     defaultContent: "-",
        //     targets: "_all"
        // }],

        // select: {
        //     style: 'multi'
        // },
        // order: [[1, 'asc']]
    });
});

