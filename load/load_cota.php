<?php 
require("../config.php");

$acao = $_POST['acao'];
$idProcedimento = $_POST['idProcedimento'];

$ordena = "";

switch($acao){
    case '1':
        $ordena .=" ORDER BY c.valor DESC";
        break;
    case '2':
        $ordena .=" ORDER BY c.valor ASC";
        break;
}

$sql = "SELECT  c.idcota, 
                p.nome AS nomeProcedimento, 
                p.preparo, 
                c.prestador AS nomeFornecedor, 
                c.valor AS valorPrestador
        FROM cota c
        INNER JOIN procedimento p ON p.idprocedimentos = c.idprocedimentos
        WHERE p.idprocedimentos = '$idProcedimento' 
        GROUP BY c.prestador
        $ordena";

$verifica = mysqli_query($db, $sql);

if(mysqli_num_rows($verifica) > 0){
    $result = [];

    while($row = mysqli_fetch_assoc($verifica)){
        $result[] = array(
            'idcota' => $row['idcota'] ?? 0,
            'nome' => $row['nomeProcedimento'] ?? 0,
            'preparo' => $row['preparo'] ?? 0,
            'fornecedor' => $row['nomeFornecedor'] ?? 0,
            'valorPrestador' => $row['valorPrestador'] ?? 0
        );
    };
    echo json_encode(array('cota' => $result));
}else{
    echo json_encode(array('cota' => null));
}

mysqli_close($db);
mysqli_free_result($verifica);
?>

?>