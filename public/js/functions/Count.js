$(document).on('click', '.count', function(e) {
    e.preventDefault();

    let quantidade = $("#quantidade").text();
    quantidade = parseInt(quantidade);

    if($(this).attr('name') == "subtrair") {
        quantidade --
        if($("#quantidade").text() !== '0') {
            $("#quantidade").text(quantidade);
        }
    }

    else if ($(this).attr('name') == "adicionar") {
        quantidade ++
        $("#quantidade").text(quantidade);
    }

});
