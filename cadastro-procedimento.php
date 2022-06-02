<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<script src="js/cadastro-procedimento.js"></script>

<div class="row my-3">
    <div class="col-md-6 offset-md-3">

        <a href="index.php">
            <button type="button" id="voltar" class="btn btn-primary">Voltar</button>
        </a>

        <form method="POST" id="cadastro-form">

            <div class="row">
                <div class="col-12">
                    <h1>Cadastro de Procedimento</h1>
                    <label>Nome do Procedimento*</label>
                    <input type="text" value="" id="nm-proc" class="form-control" required></input>

                    <label>Preparo</label>
                    <div class="col-6">
                        <input type="text" value="" id="preparo-proc" placeholder="Max. 100 caracteres..." class="form-control" maxlength="100"></input>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-12">
                <button type="button" id="enviar-proc" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </div>
</div>