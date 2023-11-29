$(document).on('click', 'button', function(e){
    e.preventDefault();

    let idCart = $("#cartId").val();
    let idProductCart = $(this).attr('id');
    let idUser = $("#CartIdUser").val();

    console.log(idProductCart);

    $.ajax({

        method: "POST",
        url: `/CalTotal/${idProductCart}/${idUser}`,
        data:
        {
            'quantidade': $("#quantidade" + idProductCart).text()
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(res) {
            $("#totaProdutos").text(`R$ ${res.preco}`);
        }
    });

});
