<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <ul class="menulateral">
        <li><a href="Cadastro_Marca.php">Marca</a></li>
        <li><a href="Cadastro_Modelo.php">Modelo</a></li>
        <li><a class="active" href="Cadastro_Equipamento.php">Equipamento</a></li>
    </ul>

    <?php
    require 'conexao.php';
    $sqlmarcamodelo = "SELECT DISTINCT marca.*, modelo.* FROM marca INNER JOIN modelo ON marca.MCA_ID = modelo.MCA_ID ORDER BY marca.MCA_NOME";
    $sql = mysqli_query($con, $sqlmarcamodelo);
    ?>
    <form action="inserir_cadastroequi.php" method="POST">
        <div class="form-group">
            <label for="marca/modelo" class="col-sm-2 control-label"> Marca/Modelo:</label>
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
        <div class="form-group">
            <?php
            $sql = "select * from ambiente";
            $result = mysqli_query($con, $sql);
            ?>
            <label for="marca/modelo" class="col-sm-2 control-label"> Ambiente:</label>
            <div class="input-group col-sm-2">
                <select id="ambiente" name="selectambiente" required class="form-control">
                    <option value="ND"></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($result)) {
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
                    <input type="equibamento" class="form-control" id="equipamento" name="equipamento" placeholder="Adicione uma novo Equipamento">
                </div>
            </div>
        </div>
        <div class="form-group" >
            <div class="input-group col-sm-5">
                <div class="text-right">
                    <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                    <input type="reset" value="Cancelar" id="botao_limpar" class="btn btn-info" >
                </div>
            </div>
        </div>  
    </form>
    <?php
    $sql = "SELECT DISTINCT equipamentos.*, ambiente.*,modelo.* FROM equipamentos INNER JOIN ambiente ON equipamentos.AMB_ID = ambiente.AMB_ID 
															 INNER JOIN modelo ON equipamentos.MOD_ID = modelo.MOD_ID ORDER BY equipamentos.EQP_NOME";
    $result = mysqli_query($con, $sql);
    ?>
    <h1 class="text-center" style="">Consulte</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Equipamentos</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Ambiente</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $id_equipamento = $dados ['EQP_ID'];
                                $nomeequipamento = $dados ['EQP_NOME'];
                                $nomemodelo = $dados['MOD_NOME'];
                                $nomemarca = $dados ['MCA_NOME'];
                                $nomedoambiente = $dados ['AMB_NOME'];
                                ?>
                                <tr>
                                    <td><?php echo $id_equipamento ?></td>
                                    <td><?php echo $nomeequipamento ?></td>
                                    <td><?php echo $nomemodelo ?></td>
                                    <td><?php echo $nomemarca ?></td>
                                    <td><?php echo $nomedoambiente ?></td>
                                    <td class="text-right"><a  class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span> </a>
                                        <a href="excluir_equipamentos.php?id= <?php echo $i; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                    return false;" class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> </a></td>                   
                                </tr>
                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require './inc_rodape.php';
?>