<?php
    include_once("templates/header.php");

?>
    <div class="container" id="view-contact-container">
        <h1 id="main-title-show"><?=$contact['name'];?></h1>
        <p class="bold">Telefone:</p>
        <p><?=$contact['phone'];?></p>
        <p class="bold">Observação:</p>
        <p><?=$contact['observations'];?></p>

        <?php include_once("templates/btn.html");?>
    </div>

<?php
    include_once("templates/footer.php");
?>