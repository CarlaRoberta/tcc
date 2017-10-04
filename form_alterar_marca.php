<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <h1>Formulário de Alteração de Marca</h1>
    <br>
    <?php
    $id_marca = $_GET["id"];

    if (empty($id_marca)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir um registro vá até a <a href="Cadastro_Marca.php">Cardastro de marca</a> e clique no botão Editar </h4>
        </div>

        <?php
        exit;
    }
    require './conexao.php';

    $sql = "SELECT MCA_NOME FROM marca WHERE MCA_ID = $id_marca";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);

    $marca = $dados ['MCA_NOME'];
    ?>
    <div class="bloco">
        <form action="alterar_marca.php" method="POST">
            <input type="hidden" name="id_marca" value="<?php echo $id_marca; ?>"/>

            <div class="form-group">
                <div class="input-group col-sm-10">
                    <div class="text-right">
                        <input type="marca" class="form-control" id="marca" name="marca" value="<?php echo $marca; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group col-sm-5">
                    <div class="text-right">
                        <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                        <a href="Cadastro_Marca.php"  class="btn btn-info"> Cancelar</a>
                    </div>
                </div>
            </div>    
        </form>
    </div>
</div>
<?php
require './inc_rodape.php';
?>