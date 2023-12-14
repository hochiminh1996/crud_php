<?php 
    session_start();
    // para mensagem por sessão.
    include_once("connection.php");//conexão
    include_once("url.php");//url

    $contacts = []; // começa vazio

    $stmt = $conn->prepare("SELECT * FROM contacts");
    $stmt->execute();

    $contacts = $stmt->fetchAll();//retorna todos os dados encontrados.

    



?>