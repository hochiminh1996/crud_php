<?php 
    $host = "localhost";
    $user = "root";
    $dbname = "agenda_crud";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);

        // ativar modo de erros.
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "Erro: ".$e."<br>";
    }




?>