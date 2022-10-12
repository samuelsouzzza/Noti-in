<?php
include('../db/connection.php');

$id = $_GET['up_nota_id'];
$titulo = $_GET['up_nota_titulo'];
$descricao = $_GET['up_nota_descricao'];

echo $titulo;

?>