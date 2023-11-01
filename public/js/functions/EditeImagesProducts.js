function SubmitImage(id) {
    console.log($("#imagem")[0].files[0]);
    $.ajax({
        method: "POST",
        url: `/galleyProducts/update/${id}`,
        data: {
            imagem: $("#imagem")[0].files[0]
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    })
}