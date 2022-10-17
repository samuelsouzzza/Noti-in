<?php

    $hostname = "localhost";
    $dbname = "minhasnotas";
    $user = "root";
    $password= "";

    $connect = mysqli_connect($hostname, $user, $password, $dbname);

    if(!$connect) echo "Houve um problema com a conexão com o banco de dados.";

    date_default_timezone_set('America/Sao_Paulo');
    $dataAtual = date('y/m/d');
    $horaAtual = date('H:i');
?>