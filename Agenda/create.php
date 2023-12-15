<?php
include_once("templates/header.php");
?>


<div class="container" id="create_container">
    <h1 id="main-title">Criar Contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
        <!-- processamento no process -->
        <input type="hidden" type="create">
        <!-- input para verificar o tipo de solicitação que está sendo feita pelo form. No caso, uma criação -->
        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" id="name" placeholder="Nome do contato" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" placeholder="Telefone do contato" class="form-control" name="phone" required>
        </div>

        <div class="form-group">
            <label for="observations">Observação:</label><br>
            <textarea name="observations" id="observations" cols="149" class="form-control" rows="5" placeholder="Insira a observação:"></textarea>
        </div>

        <input type="submit" class="btn_submit" value="Cadastrar">
        <?php include_once("templates/btn.html"); ?>

    </form>

</div>
<?php
include_once("templates/footer.php");
?>