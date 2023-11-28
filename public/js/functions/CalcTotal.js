$(document).on('click', 'button', function(e){
    e.preventDefault();

    let idCart = $("#cartId").val();
    let idUser = $("#CartIdUser").val();
    $.ajax({

        method: "POST",
        url: `/CalTotal/${idCart}/${idUser}`,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(res) {
                console.log(res);
        }
    });

});
