// Adiciona categoria

$(document).on('click', '.addCategorie', function(event) {
    event.preventDefault();
    
    $.ajax({
        method: "POST",
        url: `/newCategorie`,
        data: {
            NewCategorie: $('#NewCategorie').val(),
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function(data) {
            console.log(data);
            $("#NewCategorie").val('');
            $("#messageResult").removeClass("d-none alert-danger").addClass("alert-success");
            $("#messageResult").text(`${data}`);
        },
        error: function(req, res) {
            if(res){
                $("#NewCategorie").val('');
                $("#messageResult").removeClass("d-none alert-success").addClass("alert-danger");
                $("#messageResult").text('Erro ao adicionar categoria, verifique e tente novamente!');
            };
        }
    });
});