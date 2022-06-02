<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/index.js"> </script>

<style>

#col-id{
    width: 15px;
}
#col-proc, #col-pres, #col-valcot{
    width: 150px;
}
#col-preparo{
    width: 300px;
}
#col-status{
    width: 40px;
}

</style>

<body>
    <div class="row my-3">
        <div class="col-md-9 offset-md-1">
            <form method="POST" id="commentForm">

                <div class="row">
                    <div class="col-12">

                        <h1 class="h1" style="texte-align: center">Cotação de Procedimentos</h1>

                        <div class="row">
                            <label class="form-label">Cadastrar:</label>
                            <div class="mb-3">
                                <a href="cadastro-procedimento.php"><button type="button" id="cad-proc" class="btn btn-primary">Procedimento</button></a>
                                <a href="cadastro-cota.php"><button type="button" id="cad-cota" class="btn btn-primary">Cota</button></a>
                            </div>
                        </div>

                        <label>Procedimento</label>
                        <div class="col-6">
                        <select class="form-control" id="select-procedimento">
                            <option value="">Selecione um Procedimento...</option>
                        </select>
                        </div>

                        <div class="row">
                            <label class="control-label">Buscar Por: </label>
                            <div class="col-3">
                                <select id="select-busca" class="form-control select2-single">
                                    <option selected="selected" value="1">Maior Valor Cotação</option>
                                    <option value="2">Menor Valor Cotação</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <button type="button" id="enviar" class="btn btn-primary" onclick="listagem()">Buscar</button>
                            </div>

                        </div>

                        <div class="row my-4">
                            <div class="card border-secondary col-4" id="div-vencedor" style="text-align: center; margin-left: 12px">
                                <div class="card-header">Prestador Vencedor</div>
                                <div class="card-body text-secondary">
                                    <h2 style="font-size: 15px" class="card-title" id="vencedor" value="">--/--</h2>
                                </div>
                            </div>

                            <div class="card border-secondary col-2" id="media-total" style="display: inline-block; text-align: center; margin-left: 43px">
                                <div class="card-header">Cotação Média</div>
                                <div class="card-body text-secondary">
                                    <h2 style="font-size: 15px" class="card-title" id="mediaTotal" value="">--/--</h2>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <table id="table" class="table">
                                    <thead style="text-align: center;" id="cabecalho-table">
                                        <tr>
                                            <th id="col-id">#</th>
                                            <th id="col-proc">Procedimento</th>
                                            <th id="col-preparo">Preparo</th>
                                            <th id="col-pres">Prestador</th>
                                            <th id="col-valcot">Valor Cotação</th>
                                        </tr>
                                    </thead>

                                    <tbody style="text-align: center;" id="listagem-table">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>