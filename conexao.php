<?php 
$servidor = "localhost";
$usuario = 'root';
$senha = "";
$dbname = "test";
// criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if ($conn->connect_errno){
    echo "falha ao conectar: (" . $conn->connect_errno . ")"  . $conn->connect_errno;
}
?>