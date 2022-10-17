<?php

    $hostname = "localhost";
    $dbname = "minhasnotas";
    $user = "root";
    $password= "";

    $connect = mysqli_connect($hostname, $user, $password, $dbname);

    if(!$connect) echo "Houve um problema com a conexão com o banco de dados.";
?>