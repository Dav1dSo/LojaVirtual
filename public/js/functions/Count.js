$(document).on('click', '.count', function(e) {
    e.preventDefault();

    let idCardProduct = $(this).attr('id');

    let quantidade = $("#quantidade" + idCardProduct).text();
    quantidade = parseInt(quantidade);

    if($(this).attr('name') == "subtrair") {
        quantidade --
        if($("#quantidade" + idCardProduct).text() !== '0') {
            $("#quantidade" + idCardProduct).text(quantidade);
        }
    }

    else if ($(this).attr('name') == "adicionar") {
        quantidade ++
        $("#quantidade" + idCardProduct).text(quantidade);
    }

});
