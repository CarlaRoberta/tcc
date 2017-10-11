<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php
    $mysql_query = "SELECT * FROM ambiente";
    if (isset($_POST['btnEnviar'])) {
        $nomedoambiente = $_POST['ambientes'];
    }
    ?>
    <form class="navbar-form navbar-left" role="search">
        <div class="row">
            <div class="col-lg-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ambientes" name="nomedoambiente"/>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default" value="Enviar" name="btnEnviar">Procurar</button>
                    </span>
                </div>
            </div>
        </div>    
    </form>
    <?php
    require 'conexao.php';
    $sql = "SELECT DISTINCT equipamentos.*, ambiente.*,modelo.*, marca.* FROM equipamentos 
    INNER JOIN ambiente ON equipamentos.AMB_ID = ambiente.AMB_ID 
    INNER JOIN modelo ON equipamentos.MOD_ID = modelo.MOD_ID 
    INNER JOIN marca ON modelo.MCA_ID = marca.MCA_ID
    ORDER BY equipamentos.EQP_NOME
    ";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ambiente</th>
                                <th>Marca/Modelo</th>
                                <th>Comandos</th>
                                <th></th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $nomemodelo = $dados['MOD_NOME'];
                                $nomemarca = $dados ['MCA_NOME'];
                                $nomedoambiente = $dados ['AMB_NOME'];
                                ?>
                                <tr>                                
                                    <td><?php echo $nomedoambiente; ?></td>
                                    <td><?php echo $nomemarca; ?> - <?php echo $nomemodelo; ?></td>
                                    <?php
                                    $sqlcomandos = "select * from comandos";
                                    $resultcomandos = mysqli_query($con, $sqlcomandos);
                                    ?>
                                    <td><select id="doque" name="selectmodelo" required class="form-control">
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
                                        </select></td>
                                    <td class="text-right"><div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                            </label>
                                        </div></td>                   
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
    <div class="form-group">
        <div class="input-group col-sm-5">
            <div class="text-right">
                <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                <input type="reset" value="Cancelar" id="botao_limpar" class="btn btn-info" >
            </div>
        </div>
    </div>
</div>
<?php
require './inc_rodape.php';
?>