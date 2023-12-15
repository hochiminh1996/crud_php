<?php
session_start();
// para mensagem por sessão.
include_once("connection.php"); //conexão
include_once("url.php"); //url

// verificando se há dados no post
$data = $_POST;

if (!empty($data)) {
    // se tiver dados enviado por post. Aqui haverá modificações no banco : inserção
    // print_r($data);

    // criando um contato. Com base com base no input hidden que tem um name = type e value = create
    if ($data['type'] === "create") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $observations = $_POST['observations'];

        $stmt = $conn->prepare("INSERT INTO contacts(name, phone, observations)VALUES(:name, :phone, :observations)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {
            $stmt->execute();

            $_SESSION['msg'] = "Contato criado com sucesso";
            // aqui passamos os valores para sessão quando o contato for criado.

        } catch (Exception $e) {
            echo "Erro de inserção de registros -> " . $e->getMessage() . "<br>";
        }
    } else if ($data['type'] === "edit") {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $observations = $_POST['observations'];
        $id = $_POST['id'];

        $stmt = $conn->prepare("UPDATE contacts SET name =:name, phone = :phone, observations = :observations WHERE id = :id");

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try{
            $stmt->execute();
            $_SESSION['msg'] = "Contato atualizado com sucesso.";
        }catch(Exception $e){
            echo "Erro ao inserir dados -> ".$e->getMessage()."<br>";
        }



    }
    header("Location:../index.php");
} else {
    // se não tiver dados enviado por post. Ou seja, é apenas consultas de individuais ou retorno de todos os registros

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
}


// fechando conexão
$conn = null;