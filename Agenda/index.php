<?php
    include_once("templates/header.php");

?>
    <div class="container">
        <!-- msg de sessão -->
        <?php if(isset($printMsg) && $printMsg!=""):        ?>
        <p id="msg"><?=$printMsg?></p>
        <?php endif;?>

        <h1 id="main-title">Minha Agenda</h1>

        <!-- se houver contatos -->
        <?php if(count($contacts) > 0):       ?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Observação</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($contacts as $v):?>
                        <tr>
                            <td scope="row" class="call-id"><?=$v['id'];?></td>
                            <td scope="row"><?=$v['name'];?></td>
                            <td scope="row"><?=$v['phone'];?></td>
                            <td scope="row"><?=$v['observations'];?></td>
                            <td class="actions">
                                <!-- os icones -->
                                <a href="<?=$BASE_URL?>show.php?id=<?=$v['id'];?>"><i class="fas fa-eye check-icon"  title="Visualizar"></i></a>
                                <a href=""><i class="far fa-edit edit-icon"  title="Editar"></i></a>
                                
                                <!-- delete icon-->
                                <button type="submit" class="delete-btn" title="Deletar"><i class="fas fa-times delete-icon"></i></button>
                               
                            </td>
                        </tr>

                    <?php endforeach;?>    
                </tbody>
                
            </table>
        <?php else:?>
            <p id="empty-list-text">Não há contatos na agenda. <a href="<?=$BASE_URL?>create.php">Adicionar Contatos</a></p>

        <?php endif;?>    
            


    </div>

<?php
    include_once("templates/footer.php");
?>