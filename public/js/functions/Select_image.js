$(document).on('click', '.select_img', function(event) {
    event.preventDefault();
    
    const img = $(this).attr('src');
    $("#imgDestaque").attr('src', img);
    
});