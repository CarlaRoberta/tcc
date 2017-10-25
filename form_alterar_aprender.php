<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php
    require './inc_menuLateral.php';
    require 'conexao.php';
    $cod = $_GET["id"];
    $sqlm = "SELECT DISTINCT modelo_comandos.*,modelo.*, marca.*,comandos.* FROM modelo_comandos
            INNER JOIN modelo ON modelo_comandos.MOD_ID = modelo.MOD_ID 
            INNER JOIN marca ON modelo.MCA_ID = marca.MCA_ID 
            INNER JOIN comandos ON modelo_comandos.CMD_ID = comandos.CMD_ID
            ORDER BY modelo_comandos.MCM_CODAPRENDIDO";
    $resultm = mysqli_query($con, $sqlm);
    $dadosm = mysqli_fetch_assoc($resultm);
    $nomemodelo = $dadosm ['MOD_NOME'];
    $nomemarca = $dadosm ['MCA_NOME'];
    $descricao = $dadosm ['CMD_DESCRI'];
    
    $sqlmarcamodelo = "SELECT DISTINCT marca.*, modelo.* FROM marca INNER JOIN modelo ON marca.MCA_ID = modelo.MCA_ID ORDER BY marca.MCA_NOME";
    $resulmarca = mysqli_query($con, $sqlmarcamodelo);
    ?>

    <form action="form_alterar_aprender.php" method="GET">
        <input type="submit" name="capturar" value="Capturar Codigo do DC" class="btn btn-sm btn-warning">
    </form>
    <?php
    if (isset($_GET["capturar"])) {
        include 'Receber.php';
    }
    ?>
    <form action="alterar_aprender.php" method="POST">
        <div class="form-group">
            <label for="marca/modelo" class="col-sm-3 control-label"> Marca/Modelo:</label>
            <div class="input-group col-sm-2">
                <select id="doque" name="selectmodelo" required class="form-control">
                    <option value=""><?php echo $nomemarca; ?> - <?php echo $nomemodelo; ?></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($resulmarca)) {
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
        <?php
        $sqlcomandos = "Select * from comandos";
        $resultcomandos = mysqli_query($con, $sqlcomandos);
        ?>
        <div class="form-group">
            <label for="comandos" class="col-sm-3 control-label"> Comandos:</label>
            <div class="input-group col-sm-5">
                <select id="comandos" name="comandos" required class="form-control">
                    <option value=""><?php echo $descricao; ?></option>
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
            <div class="input-group col-sm-8">
                <div class="text-right">
                    <a href="Comandos.php" class="btn btn-sm btn-warning" > <span class="glyphicon glyphicon-hand-right"> </span>  </a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Comandos Capturados:</label>
            <div class="input-group col-sm-5">          
                <div class="text-right" >
                    <textarea name="comandocapturados" type="text" id="inputHelpBlock" aria-describedby="helpBlock"  class="col-sm-12" disabled="disabled"><?php echo $l ?></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group col-sm-5">
                <div class="text-right">
                    <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                    <input type="reset" value="Limpar" id="botao_limpar" class="btn btn-info" >
                </div>
            </div>
        </div>    
    </form>
</div>
<?php
require './inc_rodape.php';
?>