$(document).on('click', '#enviar-proc', function () {
    $.ajax({
        url: 'submit/submit-proc.php',
        type: 'POST',
        cache: false,
        dataType: "json",
        data: {
            nome: $('#nm-proc').val(),
            preparo: $('#preparo-proc').val(),
        },success: function (data){
            alert("Cadastrado com sucesso!");
            location.reload();
        }
    })
});