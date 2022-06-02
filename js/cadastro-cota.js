$(document).on('click', '#enviar-cota', function () {
    $('#valor-cota').val(numberify($('#valor-cota').val()));
    $.ajax({
        url: 'submit/submit-cota.php',
        type: 'POST',
        cache: false,
        dataType: "json",
        data: {
            nome: $('#nm-cota').val(),
            valor: $('#valor-cota').val(),
            idprocedimentos: $('#select-procedimentos').val()
        }
    });
    alert('Cadastro com Sucesso!');
    location.reload();
})

jQuery(function ($) {
    $("#valor-cota").maskMoney(
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

$.ajax({
    url: 'load/load_procedimento.php',
    type: 'POST',
    cache: false,
    dataType: "json",
    data: {
    },
    success: function (data) {

        data.procedimentos.forEach(function (item) {
            $('#select-procedimentos').append(`<option value="${item.idprocedimentos}">${item.nome}</option>`);
        });
    }
});