<?php
    include('../db/connection.php');

    $del_item_id = $_GET['del_id_nota'];

    $line = "DELETE FROM anotacoes WHERE id_notas = $del_item_id";
    $query = mysqli_query($connect, $line);

    header('location: ../index.php');
?>