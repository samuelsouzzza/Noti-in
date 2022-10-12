<?php
include('../db/connection.php');

$txtTitulo = $_POST['txt-titulo'];
$txtDesc = $_POST['txt-descricao'];

$query = "INSERT INTO anotacoes (titulo_notas, descricao_notas) VALUES ('$txtTitulo', '$txtDesc');";
mysqli_query($connect,$query);
    

header('location: ../index.php');


?>