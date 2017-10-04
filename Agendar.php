<header>
    <?php require './inc_menu.php';
    require 'conexao.php';
    ?>
</header>
<div class="container">
    <form>
        <div class="form-group">
            <label for="horario" class="col-sm-3 control-label">Horário:</label>
            <div class="input-group col-sm-2">
                <select id="horario" name="horario" required class="form-control">
                    <option value="ND"></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="data" class="col-sm-3 control-label"> Data:</label>
            <div class="input-group col-sm-2">
                <select id="data" name="data" required class="form-control">
                    <option value="ND"></option>
                </select>
            </div>
        </div>
        <?php
        $sql = "SELECT DISTINCT equipamentos.*, ambiente.*,modelo.*, marca.* FROM equipamentos INNER JOIN ambiente ON equipamentos.AMB_ID = ambiente.AMB_ID INNER JOIN modelo ON equipamentos.MOD_ID = modelo.MOD_ID INNER JOIN marca ON modelo.MCA_ID = marca.MCA_ID ORDER BY equipamentos.EQP_NOME";
        $result = mysqli_query($con, $sql);
        ?>
        <div class="form-group">
            <label for="equipamentos" class="col-sm-3 control-label">Equipamentos:</label>
            <div class="input-group col-sm-2">
                <select id="equipamentos" name="equipamentos" required class="form-control">
                    <option value="ND"></option>
                    <?php
                    while ($dados = mysqli_fetch_assoc($result)) {
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
            <label for="ambiente" class="col-sm-3 control-label"> Ambiente:</label>
            <div class="input-group col-sm-2">
                <select id="ambiente" name="ambiente" required class="form-control">
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