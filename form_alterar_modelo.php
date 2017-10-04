<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <h1>Formulário de Alteração de Modelo</h1>
    <br>
    <?php
    $id_modelo = $_GET["id"];

    if (empty($id_modelo)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir um registro vá até a <a href="Cadastro_Modelo.php">Cardastro de modelo</a> e clique no botão Editar </h4>
        </div>

        <?php
        exit;
    }
    require './conexao.php';

    $sql = "SELECT MOD_NOME,MCA_ID FROM modelo WHERE MOD_ID = $id_modelo";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);

    $modelo = $dados ['MOD_NOME'];
    
    $sqlma = "select * from marca";
    $slmarca = mysqli_query($con, $sqlma);
    $dmarca = mysqli_fetch_assoc($slmarca);
    $smarca = $dmarca ['MCA_NOME'];
    ?>
    <div class="bloco">
        <form action="alterar_modelo.php" method="POST">
            <input type="hidden" name="id_modelo" value="<?php echo $id_modelo; ?>"/>

            <div class="form-group">
                <label for="doque"class="col-sm-1 control-label"> Marca:</label>
                <div class="col-sm-2">
                    <select id="selectmarca" name="selectmarca" required class="form-control">
                        <option><?php echo $smarca; ?></option>
                        <?php
                        while ($dados = mysqli_fetch_assoc($slmarca)) {
                            $nome = $dados ['MCA_NOME'];
                            ?>
                            <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group col-sm-4">
                    <div class="text-center">
                        <input type="modelo" class="form-control" id="modelo" name="modelo" placeholder="Adicione uma novo Modelo" value="<?php echo $modelo; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group" style="margin-left: 20%;">
                <div class="input-group col-sm-5">
                    <div class="text-right">
                        <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                        <a href="Cadastro_Modelo.php"  class="btn btn-info"> Cancelar</a>
                    </div>
                </div>
            </div>  
        </form>
    </div>    
</div>
<?php
require './inc_rodape.php';
?>