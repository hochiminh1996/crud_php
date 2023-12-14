<?php
    include_once("config/url.php");
    include_once("config/process.php");//processamento


    //limpa msg

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        // armazena o valor da msg em uma variável se houver dado de sessão.
        $_SESSION['msg'] = "";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font awesome : fonte de icones :olhinho, editar, deletar e etc () -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <!-- essa classe do nav é do bootstrap -->
            <a class="navbar-brand" href="<?=$BASE_URL?>index.php">
                <img src="<?= $BASE_URL ?>img/agenda.png" alt="Agenda" title="Agenda">

            </a>

            <div>
                <div class="navbar-nav">
                    <a href="<?= $BASE_URL ?>index.php" class="nav-link active" id="home-link">Agenda</a>
                    <a href="<?= $BASE_URL ?>create.php" class="nav-link active" >Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>