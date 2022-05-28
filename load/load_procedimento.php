<?php

require("../config.php");

$sql = "SELECT idprocedimentos, nome
        FROM procedimento
        ORDER BY nome";

$verifica = mysqli_query($db, $sql);

if(mysqli_num_rows($verifica) > 0){
    $result = [];

    while($row = mysqli_fetch_assoc($verifica)){
        $result[] = array(
            'idprocedimentos' => $row['idprocedimentos'] ?? 0,
            'nome' => $row['nome'] ?? 0
        );
    };
    echo json_encode(array('procedimentos' => $result));
}else{
    echo json_encode(array('procedimentos' => null));
}

mysqli_close($db);
mysqli_free_result($verifica);
?>