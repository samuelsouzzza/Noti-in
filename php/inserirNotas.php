<?php
include('../db/connection.php');

$txtTitulo = $_POST['txt-title'];
$txtDesc = $_POST['txt-descricao'];

$query = "INSERT INTO anotacoes (titulo_notas, descricao_notas) VALUES ('$txtTitulo', '$txtDesc');";
mysqli_query($connect,$query)){
    echo "gravou";


header('location: ../index.html');


?>