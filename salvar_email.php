<?php
include_once('conexao.php');
$email = $_POST['email'];

$result_mag_contato = "INSERT INTO emails(email) VALUE ('$email')";
$resultado_mag_contato = mysqli_query($conn, $result_mag_contato)
?>