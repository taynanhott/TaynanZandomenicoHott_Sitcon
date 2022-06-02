jQuery(function ($) {
    $("#valor-proc").maskMoney(
        {
            prefix: 'R$ ',
            allowNegative: true,
            thousands: '',
            decimal: '.'
        }
    );
});

function numberify(value) {
    return parseFloat(
        value
            .trim()
            .replace(/^R\$ +/, '')
    ).toFixed(2)
}

$(document).on('click', '#enviar-proc', function () {
    $.ajax({
        url: 'submit/submit-proc.php',
        type: 'POST',
        cache: false,
        dataType: "json",
        data: {
            nome:    $('#nm-proc').val(),
            preparo: $('#preparo-proc').val()
        }
    });
    alert('Cadastro com Sucesso!');
    location.reload();
})