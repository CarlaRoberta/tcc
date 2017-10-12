<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <?php require './inc_menuLateral.php'; ?>
    <div class="bloco">
        <form action="inseir_cadastroambiente.php" method="POST">
            <div class="form-group">
                <label for="ambiente" class="col-sm-2 control-label"> Ambiente:</label>
                <div class="input-group col-sm-5">
                    <div class="text-right">
                        <input type="ambiente" class="form-control" id="ambiente" name="ambiente" placeholder="Adicione um novo ambiente" required>
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
    require 'conexao.php';
    $sql = "select * from ambiente";
    $result = mysqli_query($con, $sql);
    ?>
    <h1  class="text-center">Consulte</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ambiente</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $id_ambiente = $dados ['AMB_ID'];
                                $nome = $dados ['AMB_NOME'];
                                ?>
                                <tr>
                                    <td><?php echo $id_ambiente ?></td>
                                    <td><?php echo $nome; ?></td>
                                    <td class="text-right"><a href="form_alterar_Ambiente.php?id= <?php echo $id_ambiente; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="excluir_ambiente.php?id= <?php echo $id_ambiente; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
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