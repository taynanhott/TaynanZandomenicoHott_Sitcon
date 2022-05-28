<?php

require('../config.php');

$nomecota = $_POST['nome'] ?? 0;
$valor = $_POST['valor'] ?? 0;
$idprocedimentos = $_POST['idprocedimentos'];

$sql = "INSERT INTO cota(prestador, valor, idprocedimentos)
        VALUES          ('$nomecota', '$valor', '$idprocedimentos')";

$qry = mysqli_query($db, $sql) or die('Procedimento, submit-proc: Erro no Insert Procedimento - Linha 11');

?>