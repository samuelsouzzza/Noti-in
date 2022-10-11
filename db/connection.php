<?php

    $hostname = "localhost";
    $dbname = "minhasnotas";
    $user = "root";
    $password= "";

    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", "$user", "$password"); 
    
    
    // if($pdo){
    //     echo "Conexão bem-sucedida";
    // }else{
    //     echo "Problema na conexão.";
    // }
?>