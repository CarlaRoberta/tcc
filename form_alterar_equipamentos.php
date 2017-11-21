<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <h1>Formulário de Alteração de Equipamento</h1>
    <br>
    <?php
    $id_equipamento = $_GET["id"];

    if (empty($id_equipamento)) {
        ?>
        <div class="alert-danger">
            <h3>Falha ao abrir formulário de alteração</h3>
            <h4>Para abrir um registro vá até a <a href="Cadastro_Equipamento.php">Cardastro de Equipamento</a> e clique no botão Editar </h4>
        </div>

        <?php
        exit;
    }
    require './conexao.php';

    $sql = "SELECT DISTINCT equipamentos.*,modelo.*, ambiente.*,marca.* FROM  equipamentos 
            INNER JOIN modelo ON equipamentos.MOD_ID = modelo.MOD_ID
            INNER JOIN ambiente ON equipamentos.AMB_ID = ambiente.AMB_ID
            INNER JOIN marca ON modelo.MCA_ID = marca.MCA_ID
            WHERE equipamentos.EQP_ID = $id_equipamento";

    $result = mysqli_query($con, $sql);

    $dados = mysqli_fetch_assoc($result);

    $idmodelo = $dados ['MOD_ID'];
    $nomemodelo = $dados ['MOD_NOME'];
    $nomemarca = $dados['MCA_NOME'];
    $equipamentos = $dados ['EQP_NOME'];
    $nomeambiente = $dados ['AMB_NOME'];

    ?>
    <form action="alterar_equipamentos.php" method="POST">
        <div class="form-group">
            <label for="marca/modelo" class="col-sm-2 control-label"> Marca/Modelo:</label>
            <div class="input-group col-sm-2">
                <?php
                $sqlmarcamodelo = "SELECT DISTINCT marca.*, modelo.* FROM marca INNER JOIN modelo ON marca.MCA_ID = modelo.MCA_ID ORDER BY marca.MCA_NOME";
                $sqli = mysqli_query($con, $sqlmarcamodelo);
                ?>
                <select id="doque" name="selectmodelo" required class="form-control">
                    <option value="ND"><?php echo $nomemarca; ?> - <?php echo $nomemodelo; ?></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($sqli)) {
                        $nomemodelo = $dados ['MOD_NOME'];
                        $id = $dados['MOD_ID'];
                        $nomemarca = $dados['MCA_NOME'];
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $nomemarca; ?> - <?php echo $nomemodelo; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <?php
            $sqlam = "select * from ambiente";
            $resultam = mysqli_query($con, $sqlam);
            $dambient = mysqli_fetch_assoc($resultam);
            ?>
            <label for="marca/modelo" class="col-sm-2 control-label"> Ambiente:</label>
            <div class="input-group col-sm-2">
                <select id="ambiente" name="selectambiente" required class="form-control">
                    <option value="ND"><?php echo $nomeambiente; ?></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($resultam)) {
                        $id = $dados['AMB_ID'];
                        $nomeambiente = $dados['AMB_NOME'];
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $nomeambiente; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class=" col-sm-4">
                <div class="text-center">
                    <input type="equipamento" class="form-control" id="equipamento" name="equipamento" value="<?php echo $equipamentos; ?>">
                </div>
            </div>
        </div>
        <div class="form-group" >
            <div class="input-group col-sm-5">
                <div class="text-right">
                    <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                    <a href="Cadastro_Equipamento.php"  class="btn btn-info"> Cancelar</a>
                </div>
            </div>
        </div>  
    </form>
</div>
<?php
require './inc_rodape.php';
?>