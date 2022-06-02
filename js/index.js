$.ajax({
    url: 'load/load_procedimento.php',
    type: 'POST',
    cache: false,
    dataType: "json",
    data: {
    },
    success: function (data) {

        data.procedimentos.forEach(function (item) {
            $('#select-procedimento').append(`<option value="${item.idprocedimentos}">${item.nome}</option>`);
        });
    }
});

function listagem() {

    $('#listagem-table').empty();
    $('#mediaTotal').text("--/--");
    $('#vencedor').text("--/--");

    if ($('#select-procedimento').val() > 0) {

        $.ajax({
            url: 'load/load_cota.php',
            type: 'POST',
            dataType: 'json',
            data: {
                acao: $('#select-busca').val(),
                idProcedimento: $('#select-procedimento').val(),
            },
            success: function (data) {
                const {
                    procedimentos
                } = data;
                var media = 0;
                var cont = 0;
                var candidato = 0;
                var fornecedor = "";

                if (procedimentos.length > 2) {

                    data.procedimentos.forEach(function (item) {
                        media += parseFloat(`${item.valorPrestador}`);
                        cont++;
                    })
                    media = media / cont;

                    var vencedor = Math.abs(parseFloat(data.procedimentos[0].valorPrestador) - media);

                    data.procedimentos.forEach(function (item) {
                        $('#listagem-table').append(`<tr style="text-align: center">
                                                        <th>${item.idcota}</th>
                                                        <th>${item.nome}</th>
                                                        <th>${item.preparo}</th>
                                                        <th>${item.fornecedor}</th>
                                                        <th>R$ ${item.valorPrestador}</th>
                                                     </tr>`);

                        candidato = Math.abs(parseFloat(`${item.valorPrestador}`) - media);
                        console.log(candidato);

                        if (candidato <= vencedor) {
                            vencedor = candidato;
                            fornecedor = `${item.fornecedor}`;
                        }

                    })

                    $('#vencedor').text(fornecedor);
                    $('#mediaTotal').text('R$ ' + media);

                } else {
                    $('#listagem-table').append(`<tr style="text-align: center">
                                            <th colspan="7"> Cotas cadastradas insuficientes! </th>
                                        </tr>`);
                }
            }
        })
    } else {
        alert('Selecione um procedimento!');
    }
};