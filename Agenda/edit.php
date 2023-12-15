<?php
include_once("templates/header.php");
?>


<div class="container" id="create_container">
    <h1 id="main-title">Editar Contato</h1>

    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
        <!-- processamento no process -->
        <input type="hidden" name="type" value="edit">
        <!-- input para verificar o tipo de solicitação que está sendo feita pelo form. No caso, uma criação -->

        <input type="hidden" name="id" value="<?=$contact['id'];?>">
        <!-- AQUI PASSAMOS O ID PARA RECUPERAÇÃO NO BACK NO MOMENTO DA EDIÇÃO. CONTACT É UM VALOR INDIVIDUAL VINDO DA VALIDAÇÃO DO PROCESS.PHP -->


        <div class="form-group">
            <label for="name">Nome do contato:</label>
            <input type="text" id="name" placeholder="Nome do contato" class="form-control" name="name" required value="<?=$contact['name'];?>">
        </div>

        <div class="form-group">
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" placeholder="Telefone do contato" class="form-control" name="phone" required value="<?=$contact['phone'];?>">
        </div>

        <div class="form-group">
            <label for="observations">Observação:</label><br>
            <textarea name="observations" id="observations" cols="149" class="form-control" rows="5" placeholder="Insira a observação:"><?=$contact['observations'];?></textarea>
        </div>

        <input type="submit" class="btn_submit" value="Atualizar">
        <?php include_once("templates/btn.html"); ?>

    </form>

</div>
<?php
include_once("templates/footer.php");
?>