<?php
require("../config.php");

$nomecota = $_POST['nome'] ?? '0';
$valor = $_POST['valor']  ?? '0';
$idprocedimentos = $_POST['idprocedimentos'];

$sql0 = "INSERT INTO cota(nome, valor, idprocedimentos)
         VALUES          ('$nomecota', '$valor', '$idprocedimentos')";

$qry = mysqli_query($db, $sql0)
		or die('Cota, submit-proc: Erro no Insert Cota - Linha 13');
?>