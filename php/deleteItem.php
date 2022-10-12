<?php
    include('../db/connection.php');

    $line = "DELETE FROM anotacoes WHERE id_notas = 3";
    $query = mysqli_query($connect, $line);

    header('location: ../index.php');
?>