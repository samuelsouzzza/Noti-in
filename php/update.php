<?php
include('../db/connection.php');

$id = $_POST['txt-id-update'];

$novoTitulo = $_POST['txt-titulo-update'];
$novaDescricao = $_POST['txt-descricao-update'];

$line = "UPDATE anotacoes SET titulo_notas = '$novoTitulo', descricao_notas = '$novaDescricao', data_notas = '$dataAtual', hora_notas = '$horaAtual' WHERE id_notas = $id;";
echo $line;
mysqli_query($connect, $line);

header('location: ../index.php');
?>