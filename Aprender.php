<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php require './inc_menuLateral.php'; ?>
    <?php
    require 'conexao.php';
    $sqlmarcamodelo = "SELECT DISTINCT marca.*, modelo.* FROM marca INNER JOIN modelo ON marca.MCA_ID = modelo.MCA_ID ORDER BY marca.MCA_NOME";
    $sql = mysqli_query($con, $sqlmarcamodelo);
    ?>

    <form action="Aprender.php" method="GET">
        <input type="submit" name="capturar" value="Capturar Codigo do DC" class="btn btn-sm btn-warning">
    </form>
    <?php
    if (isset($_GET["capturar"])) {
        include 'Receber.php';
    }
    ?>
    <form action="inserir_codfabri.php" method="POST">
        <div class="form-group">
            <label for="marca/modelo" class="col-sm-3 control-label"> Marca/Modelo:</label>
            <div class="input-group col-sm-2">
                <select id="doque" name="selectmodelo" required class="form-control">
                    <option value="ND"></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($sql)) {
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
            <div class="input-group col-sm-8">
                <div class="text-right">
                    <a href="Comandos.php" class="btn btn-sm btn-warning" > <span class="glyphicon glyphicon-hand-right"> </span>  </a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Comandos Capturados:</label>
            <div class="input-group col-sm-5">          
                <div class="text-right">
                    <textarea value="<?php echo $l; ?>" type="text" id="inputHelpBlock" aria-describedby="helpBlock"  class="col-sm-12" disabled="disabled"><?php echo $l ?></textarea>
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
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>  
                                <td class="text-right"><a href="form_alterar_apredizado.php?id= <?php // echo $id_equipamento;      ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                    <a href="excluir_aprendizado.php?id= <?php // echo $id_equipamento;      ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                return false;" class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc_rodape.php';
?>