<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php require './inc_menuLateral.php'; ?>
    <?php
    require 'conexao.php';
    $sqlmarca = "select * from marca";
    $slmarca = mysqli_query($con, $sqlmarca);
    ?>
    <form action="inserir_cadastromodelo.php" method="POST">        
        <div class="form-group">
            <label for="doque"class="col-sm-1 control-label"> Marca:</label>
            <div class="col-sm-2">
                <select id="selectmarca" name="selectmarca"  class="form-control" required>
                    <option value="">None</option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($slmarca)) {
                        $nome = $dados ['MCA_NOME'];
                        $id = $dados['MCA_ID'];
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $nome; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <label for="modelo" class="col-sm-1 control-label"> Modelo:</label>
            <div class="input-group col-sm-4">
                <div class="text-center">
                    <input type="modelo" class="form-control" id="modelo" name="modelo" required placeholder="Adicione uma novo Modelo">
                </div>
            </div>
        </div>
        <div class="form-group" style="margin-left: 20%;">
            <div class="input-group col-sm-5">
                <div class="text-right">
                    <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                    <input type="reset" value="Limpar" id="botao_limpar" class="btn btn-info" >
                </div>
            </div>
        </div>  
    </form>
    <?php
    $sql = "SELECT DISTINCT marca.*, modelo.* FROM marca INNER JOIN modelo ON marca.MCA_ID = modelo.MCA_ID ORDER BY marca.MCA_NOME";
    $result = mysqli_query($con, $sql);
    ?>
    <h1 class="text-center" style="">Modelos de Condicionadores de Ar.</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $id_modelo = $dados ['MOD_ID'];
                                $nome = $dados ['MOD_NOME'];
                                $smarca = $dados ['MCA_NOME'];
                                ?>
                                <tr>
                                    <td><?php echo $id_modelo ?></td>
                                    <td><?php echo $nome ?></td>
                                    <td><?php echo $smarca ?></td>
                                    <td class="text-right"><a  href="form_alterar_modelo.php?id= <?php echo $id_modelo; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a href="excluir_modelo.php?id= <?php echo $id_modelo; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                    return false;"  class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> </a></td>                   
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    $sqlc = "SELECT modelo_comandos.*,comandos.* FROM modelo_comandos
                INNER JOIN comandos ON modelo_comandos.CMD_ID = comandos.CMD_ID
                ORDER BY modelo_comandos.CMD_ID";
    $resultc = mysqli_query($con, $sqlc);
    ?>
    <h1 class="text-center" style="">Comandos Capturados.</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Comando</th>
                                <th>Código Capturados</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($resultc)) {
                                $descricao = $dados['CMD_DESCRI'];
                                $codfabri = $dados ['MCM_CODAPRENDIDO'];
                                if ($codfabri != NULL) {
                                    $msg = "Codigo está gravado corretamente porém é muito grande";
                                }
                                ?>
                                <tr>
                                    <td><?php echo $descricao; ?></td>
                                    <td><?php echo $msg; ?></td>
                                    <td class="text-right"><a href="form_alterar_aprender.php?id=<?php echo $codfabri; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="excluir_aprender.php?id=<?php echo $codfabri; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                    return false;" class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>                   
                                </tr>
                                <?php
                            }
                            ?>
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