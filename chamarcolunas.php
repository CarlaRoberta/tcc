<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php
    require './conexao.php';
    $id_ambiente = $_GET["id"];

    $sql = "SELECT DISTINCT equipamentos.*,modelo.*, marca.* FROM equipamentos INNER JOIN modelo ON equipamentos.MOD_ID = modelo.MOD_ID INNER JOIN marca ON modelo.MCA_ID = marca.MCA_ID WHERE equipamentos.AMB_ID =  $id_ambiente";

    $result = mysqli_query($con, $sql);

    while ($dados = mysqli_fetch_assoc($result)) {
        $ambiente = $dados ['AMB_NOME'];
        $nomeequipamento = $dados['EQP_NOME'];
        $nomemarca = $dados['MCA_NOME'];
        $nomemodelo = $dados['MOD_NOME'];
        ?>
    <?php require './tabelambiente.php';?>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?php echo $nomeequipamento; ?></h3>
                        <p><?php echo $nomemarca; ?>-<?php echo $nomemodelo; ?></p>
                        <?php
                        $sqlcomandos = "select * from comandos";
                        $resultcomandos = mysqli_query($con, $sqlcomandos);
                        ?>
                        <div class="form-group">
                            <select id="doque" name="selectmodelo" required class="form-control">
                                <option value="ND"></option>
                                <?php
                                while ($dados = mysqli_fetch_assoc($resultcomandos)) {
                                    $descricao = $dados ['CMD_DESCRI'];
                                    $id = $dados['CMD_ID'];
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $descricao; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <p><a href="#" class="btn btn-primary" role="enviar">Enviar</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php
require './inc_rodape.php';
?>