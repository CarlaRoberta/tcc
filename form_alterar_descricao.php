<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <h1>Formulário de Alteração de Comandos</h1>
    <br>
    <?php
    $id_comandos = $_GET["id"];

    if (empty($id_comandos)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir um registro vá até a <a href="Comandos.php">Cardastro de Comandos</a> e clique no botão Editar </h4>
        </div>

        <?php
        exit;
    }
    require './conexao.php';

    $sql = "SELECT CMD_DESCRI FROM comandos WHERE CMD_ID = $id_comandos";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);
    
    $descrição = $dados ['CMD_DESCRI'];
    ?>
    <div class="bloco">
        <form action="alterar_descricao.php" method="POST">
            <input type="hidden" name="id_comandos" value="<?php echo $id_comandos; ?>"/>
            <div class="form-group">
                <label for="descricao" class="col-sm-2 control-label"> Descrição:</label>
                <div class="input-group col-sm-7">          
                    <textarea class="form-control" rows="3" value="descricao" id="descricao" name="descricao" ><?php echo $descrição; ?></textarea>
                    <div class="text-right">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group col-sm-5">
                    <div class="text-right">
                        <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                        <a href="Comandos.php"  class="btn btn-info"> Cancelar</a>
                    </div>
                </div>
            </div>    
        </form>
    </div>
</div>
<?php
require './inc_rodape.php';
?>