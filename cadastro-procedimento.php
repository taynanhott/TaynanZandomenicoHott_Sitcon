<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  <script src="dist/jquery.maskMoney.min.js" type="text/javascript"></script>
<script src="js/cadastro-procedimento.js"></script>

<body>
    <div class="row my-3">
        <div class="col-9 offset-md-1">

            <a href="index.php">
                <button type="button" class="btn btn-primary">Voltar</button>
            </a>

            <h1>Cadastro de Procedimentos</h1>

            <form method="POST" id="form">

                <div class="col-6">
                    <label class="form-label">Nome do Procedimento:</label>
                    <input type="text" class="form-control" id="nm-proc">
                </div>

                <div class="col-6">
                    <label class="form-label">Preparo:</label>
                    <input type="text" class="form-control" id="preparo-proc" placeholder="Max. 100 caracteres...">
                </div>

                <div class="row my-3">
                    <div class="col-6">
                        <button type="button" class="btn btn-primary" id="enviar-proc">Cadastrar</button>
                    </div>
                </div>
        </div>
        </form>

    </div>
    </div>
</body>