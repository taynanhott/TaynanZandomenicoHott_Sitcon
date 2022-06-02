<?php

require("../config.php");

$nomeprocedimento = $_POST['nome'] ?? '0';
$preparo = $_POST['preparo']  ?? '0';

$sql0 = "INSERT INTO procedimentos(nome, preparo)
         VALUES                  ('$nomeprocedimento', '$preparo')";

$qry = mysqli_query($db, $sql0)
		or die('Procedimento, submit-proc: Erro no Insert Procedimento - Linha 12');
?>