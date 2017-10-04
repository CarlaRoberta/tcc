<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <h1>Formulário de Alteração de Ambiente</h1>
    <br>
    <?php
    $id_ambiente = $_GET["id"];

    if (empty($id_ambiente)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir um registro vá até a <a href="Cadastro_Ambiente.php">Cardastro de Ambiente</a> e clique no botão Editar </h4>
        </div>

        <?php
        exit;
    }
    require './conexao.php';

    $sql = "SELECT AMB_NOME FROM ambiente WHERE AMB_ID = $id_ambiente";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);

    $ambiente = $dados ['AMB_NOME'];
    ?>
    <div class="bloco">
        <form action="alterar_ambiente.php" method="POST">
            <input type="hidden" name="id_ambiente" value="<?php echo $id_ambiente; ?>"/>

            <div class="form-group">
                <div class="input-group col-sm-10">
                    <div class="text-right">
                        <input type="ambiente" class="form-control" id="ambiente" name="ambiente" value="<?php echo $ambiente; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group col-sm-5">
                    <div class="text-right">
                        <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                        <a href="Cadastro_Ambiente.php.php"  class="btn btn-info"> Cancelar</a>
                    </div>
                </div>
            </div>    
        </form>
    </div>
</div>
<?php
require './inc_rodape.php';
?>