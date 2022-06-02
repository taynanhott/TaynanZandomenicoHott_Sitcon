<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bd-taynan-sitcon';
    
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword) or die ("Nao foi possivel conectar ao banco de dados");
mysqli_select_db($db, $dbName);
?>