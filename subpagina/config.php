<?php
include('../conexao.php');
$matricula = $_POST["matricula"];
$query = "INSERT INTO reserva(matricula) VALUES ($matricula)";
$nome = $_POST["nome"];

$stmt = $mysqli->prepare($query) or die($mysqli->error);

//Executa a query
$stmt->execute();
echo "Registro inserido com sucesso.";
?>