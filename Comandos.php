<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <div class="bloco">
        <form action="inseir_cadastrocomandos.php" method="POST">
            <div class="form-group">
                <label for="descricao" class="col-sm-2 control-label"> Descrição:</label>
                <div class="input-group col-sm-7">          
                    <textarea class="form-control" rows="3" value="descricao" name="descricao"  id="descricao" ></textarea>
                    <div class="text-right">
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
    $sql = "select * from comandos";
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
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $id_comandos = $dados ['CMD_ID'];
                                $descrição = $dados ['CMD_DESCRI'];
                                ?>
                                <tr>
                                    <td><?php echo $id_comandos ?></td>
                                    <td><?php echo $descrição; ?></td>
                                    <td class="text-right"><a href="form_alterar_comandos.php?id= <?php echo $id_comandos; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="excluir_comandos.php?id= <?php echo $id_comandos; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
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