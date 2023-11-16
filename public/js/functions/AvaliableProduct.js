$(document).on('click', '#avaliableButton', function(event) {
    event.preventDefault();

    $("#FormAvaliable").removeClass("d-none").addClass("d-block");
    $(".classificacao").addClass("d-none");
});

$(document).on('click', '#back', function(event) {
    event.preventDefault();

    $("#FormAvaliable").removeClass("d-block").addClass("d-none");
    $(".classificacao").removeClass('d-none').addClass("d-block");
});

