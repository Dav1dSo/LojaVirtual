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
        }
        
    });
});