<?php

require('../config.php');

$nomeprocedimento = $_POST['nome'] ?? 0;
$preparo = $_POST['preparo'] ?? 0;

$sql = "INSERT INTO procedimento(nome, preparo)
        VALUES                   ('$nomeprocedimento', '$preparo')";

$qry = mysqli_query($db, $sql) or die('Procedimento, submit-proc: Erro no Insert Procedimento - Linha 11');

?>