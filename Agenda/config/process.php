<?php
    session_start();
    // para mensagem por sessão.
    include_once("connection.php"); //conexão
    include_once("url.php"); //url

    // retorna os dados de um contato
    $id;
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
    }

    if (!empty($id)) {
        // se o id não estiver vazio
        $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contact = $stmt->fetch();

    } else {
        //todos os contatos
        $contacts = []; // começa vazio

        $stmt = $conn->prepare("SELECT * FROM contacts");
        $stmt->execute();

        $contacts = $stmt->fetchAll(); //retorna todos os dados encontrados.

    }
?>