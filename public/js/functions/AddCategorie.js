// Adiciona categoria

$(document).on('click', '.addCategorie', function(event) {
    event.preventDefault();
    
    //desabilita envio com enter
    $(document).ready(function () {
        $('input').keypress(function (e) {
             var code = null;
             code = (e.keyCode ? e.keyCode : e.which);                
             return (code == 13) ? false : true;
        });
     });

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
            $("buton").addClass("disable");
            history.go(0);
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