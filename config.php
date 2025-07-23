<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 231231;
$dbName = 'form_db';

$conexao = new mysqli($dbHost, $dbUsername,$dbPassword, $dbName);

// if($conexao->connect_error){
//     echo "Erro de conexão";
// }else{
//     echo "Conexão efetuada com sucesso!";
// }

?>