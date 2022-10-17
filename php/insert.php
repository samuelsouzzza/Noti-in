<?php
include('../db/connection.php');

date_default_timezone_set('America/Sao_Paulo');

$txtTitulo = $_POST['txt-titulo'];
$txtDesc = $_POST['txt-descricao'];

$query = "INSERT INTO anotacoes (titulo_notas, descricao_notas, data_notas, hora_notas) VALUES ('$txtTitulo', '$txtDesc', '$dataAtual', '$horaAtual');";
mysqli_query($connect,$query);
    

header('location: ../index.php');


?>