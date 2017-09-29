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
    $sqlmarca = "select * from marca";
    $slmarca = mysqli_query($con, $sqlmarca);
    $sqlmodelo = "select * from modelo";
    $slmodelo = mysqli_query($con, $sqlmodelo);
    ?>
    <form action="inserir_cadastroequi.php" method="POST">
        <div class="form-group">
            <label for="doque"class="col-sm-1 control-label"> Marca:</label>
            <div class="col-sm-2">
                <select id="selectmarca" name="selectmarca" required class="form-control">
                    <option value="ND"></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($slmarca)) {
                        $nome = $dados ['MCA_NOME'];
                        ?>
                        <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <label for="doque"class="col-sm-1 control-label"> Modelo:</label>
            <div class="input-group col-sm-2">
                <select id="doque" name="selectmodelo" required class="form-control">
                    <option value="ND"></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($slmodelo)) {
                        $nome = $dados ['MOD_NOME'];
                        ?>
                        <option value="<?php echo $nome; ?>"><?php echo $nome; ?></option>
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
            <div class="input-group col-sm-4">
                <div class="text-center">
                    <input type="ambiente" class="form-control" id="ambiente" name="ambiente" placeholder="Ambiente">
                </div>
            </div>
        </div>
        <div class="form-group" style="margin-left: 20%;">
            <div class="input-group col-sm-5">
                <div class="text-right">
                    <input type="submit" value="Gravar" id="botao_submit" class="btn btn-info" >
                    <input type="reset" value="Cancelar" id="botao_limpar" class="btn btn-info" >
                </div>
            </div>
        </div>  
    </form>
    <h1 class="text-center" style="">Consulte</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Equipamentos</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right"><a  class=" btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span> Alterar</a>
                                    <a onclick="if (!confirm('Tem certeza que deseja excluir?'))
                                                return false;" class=" btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</a></td>                   
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