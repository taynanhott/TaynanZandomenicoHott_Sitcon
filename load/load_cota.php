<?php
require("../config.php");

$acao            = $_POST['acao'];
$idProcedimentos = $_POST['idProcedimento'];

$ordena = "";

switch ($acao) {
    case '1':
        $ordena .= " ORDER BY c.valor DESC";
        break;
    case '2':
        $ordena .= " ORDER BY c.valor ASC";
        break;
}

$sql = "SELECT   c.idcota, p.nome As nomeProcedimento, 
                 p.preparo, c.nome As nomeFornecedor,
                 c.valor As valorPrestador
        FROM     cota c
        INNER JOIN procedimentos p ON p.idprocedimentos = c.idprocedimentos 
        WHERE    p.idprocedimentos = $idProcedimentos
        GROUP BY c.nome
        $ordena";

$verifica = mysqli_query($db, $sql);

if (mysqli_num_rows($verifica) > 0) {
    $result = [];

    while ($row = mysqli_fetch_assoc($verifica)) {

        $result[] = array(

            'idcota'            => $row['idcota']               ?? "0",
            'nome'              => $row['nomeProcedimento']     ?? "0",
            'preparo'           => $row['preparo']              ?? "0",
            'fornecedor'        => $row['nomeFornecedor']       ?? "0",
            'valorPrestador'    => $row['valorPrestador']       ?? "0"
        );
    }
    echo json_encode(array('procedimentos' => $result));
} else {
    echo json_encode(array('procedimentos' => null));
}
mysqli_close($db);
mysqli_free_result($verifica);
