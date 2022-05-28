<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/index.js"></script>
<body>
    <div class="row my-3">
        <div class="col-9 offset-md-1">

            <form method="POST" id="form">

                <div class="row">
                    <div class="col-12">

                        <h1>Cotação de Procedimentos</h1>

                        <div class="row">
                            <div class="col-6">
                                <label for="select-busca" class="form-label">Cadastrar: </label>
                                <div class="col-12">
                                    <a href="cadastro-procedimento.php">
                                        <button type="button" class="btn btn-primary">Procedimento</button>
                                    </a>
                                    <a href="cadastro-cota.php">
                                        <button type="button" class="btn btn-primary">Cota</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="select-busca" class="form-label">Procedimento: </label>
                                <select class="form-control" id="select-procedimentos">
                                    <option value="" selected="selected">Seleciobe um Procedimento...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="select-busca" class="form-label">Buscar Por:</label>
                                <select class="form-control" id="select-busca">
                                    <option selected="selected" value="1">Por maior valor de cotação</option>
                                    <option value="2">Por menor valor de cotação</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary" onclick="listagem()">Buscar</button>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="card border-secondary col-4" id="div-vencedor" style="max-width: 18rem; text-align: center;  margin-left: 12px">
                                <div class="card-header">Prestador Vencedor</div>
                                <div class="card-body">
                                    <h5 class="card-title">--/--</h5>
                                </div>
                            </div>

                            <div class="card border-secondary col-2" style="display: inline-block; text-align: center; margin-left: 38px" id="media-total; max-width: 18rem;">
                                <div class="card-header">Cotação Média</div>
                                <div class="card-body">
                                    <h5 class="card-title">--/--</h5>
                                </div>
                            </div>
                        </div>

                        <table id="table" class="table">
                            <thead id="cabecalho-table">
                                <th id="col-id">#
                                <th>
                                <th id="col-proc">Procedimento
                                <th>
                                <th id="col-preparo">Preparo
                                <th>
                                <th id="col-pres">Prestador
                                <th>
                                <th id="col-valcot">Valor Cotação
                                <th>
                            </thead>
                            <tbody id="listagem-table">
                            </tbody>
                        </table>

                    </div>
                </div>

            </form>

        </div>
    </div>
</body>