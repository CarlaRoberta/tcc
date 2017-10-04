<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <ul class="menulateral">
        <li><a class="active" href="Cadastro_Marca.php">Marca</a></li>
        <li><a href="Cadastro_Modelo.php">Modelo</a></li>
        <li><a href="Cadastro_Ambiente.php">Ambiente</a></li>
        <li><a href="Cadastro_Equipamento.php">Equipamento</a></li>
    </ul>
    <div class="bloco">
        <form action="inseir_cadastromarca.php" method="POST">
            <div class="form-group">
                <div class="input-group col-sm-10">
                    <div class="text-right">
                        <input type="marca" class="form-control" id="marca" name="marca" placeholder="Adicione uma nova marca">
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
    $sql = "select * from marca";
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
                                <th>Marca</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($dados = mysqli_fetch_assoc($result)) {
                                $id_marca = $dados ['MCA_ID'];
                                $nome = $dados ['MCA_NOME'];
                                ?>
                                <tr>
                                    <td><?php echo $id_marca ?></td>
                                    <td><?php echo $nome; ?></td>
                                    <td class="text-right"><a href="form_alterar_marca.php?id= <?php echo $id_marca; ?>" class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                                        <a href="excluir_marca.php?id= <?php echo $id_marca; ?>" onclick="if (!confirm('Tem certeza que deseja excluir?'))
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