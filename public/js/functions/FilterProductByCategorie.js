$(document).on('click', '#filter', function(event) {
    event.preventDefault();
    
    console.log(this);

    const filterCategoria = $(this).attr('name');

    $.ajax({

        url: `/product/filter/${filterCategoria}`,
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(res) {
            $("#ProductsFiltred").html(res);
        }
    })
})