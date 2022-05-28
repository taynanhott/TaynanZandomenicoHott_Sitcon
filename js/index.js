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

function listagem() {

    $('#listagem-table').empty();
    $('#mediaTotal').text("--/--");
    $('#vencedor').text("--/--");

    if($('#select-procedimentos').val() > 0){

    $.ajax({
        url: 'load/load_cota.php',
        type: 'POST',
        dataType: 'json',
        data: {
            acao: $('#select-busca').val(),
            idProcedimento: $('#select-procedimentos').val()
        },
        success: function (data) {
            const {
                cota
            } = data;

            var media = 0;
            var cont = 0;
            var candidato = 0;
            var fornecedor = 0;

            if (cota.length > 2) {
                data.cota.forEach(function (item) {
                    media += parseFloat(`${item.valorPrestador}`);
                    cont++;
                })

                media = media / cont;

                var vencedor = Math.abs(parseFloat(data.cota[0].valorPrestador) - media);

                data.procedimentos.forEach(function (item) {
                    $('#listagem-table').append(`<tr><th>${item.idcota}</th>
                                                 <th>${item.nome}</th>
                                                 <th>${item.preparo}</th>
                                                 <th>${item.fornecedor}</th>
                                                 <th>${item.valorPrestador}</th>
                                             </tr>`);
                    candidato = Math.abs(parseFloat(data.cota[0].valorPrestador) - media);

                    if (cadidato <= vencedor) {
                        vencedor = candidato;
                        fornecedor = `${item.fornecedor}`;
                    }
                })

                $('#vencedor').text(fornecedor);
                $('#mediaTotal').text('R$' + media);
            } else{
                $('#listagem-table').append(`<tr><th colspan="5">Cotas cadastradas insuficientes!</th></tr>`);
            }
        }
    })
    }else{
        alert('Selecione um procedimento!');
    }
}