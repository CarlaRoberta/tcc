<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">Aviso</div>
        <div class="panel-body">
            <p>A descrição Ligar e Desligar já é padrão do Sistema, por este motivo você não pode
                excluir porém pode editar, mas não mude o fato de uma ser Ligar e outra ser Desligar
                e não crie outras descrições com está função.</p>
            <div class="text-left">
                    <a href="Cadastro_Comandos.php" class="btn btn-sm btn-warning" > <span class="glyphicon glyphicon-hand-left"> Voltar </span></a>
                </div>
        </div>
    </div>
        <form action="inseir_cadastrocomandos.php" method="POST">
            <div class="form-group">
                <label for="descricao" class="col-sm-2 control-label"> Descrição:</label>
                <div class="input-group col-sm-10">          
                    <textarea class="form-control" rows="3" value="descricao" name="descricao"  id="descricao" ></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group col-sm-7">
                    <div class="text-right">
                        <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                        <input type="reset" value="Limpar" id="botao_limpar" class="btn btn-info" >
                    </div>
                </div>
            </div>    
        </form>
    <?php
    require 'conexao.php';
    $sql = "select * from comandos";
    $result = mysqli_query($con, $sql);
    ?>
    <h1  class="text-center">Consulte</h1>
    <div class="row">
        <div class="col-sm-12">
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
                                    <td class="text-right"><a href="form_alterar_descricao.php?id= <?php echo $id_comandos; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <?php
                                        if ($id_comandos != '1' && $id_comandos != '2') {
                                            ?>
                                            <a href="excluir_descricao.php?id= <?php echo $id_comandos; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                                return false;" class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                                <?php
                                            }
                                            ?>   
                                    </td>                 
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