<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <ul class="menulateral">
        <li><a class="active" href="Cadastro_Marca.php">Marca</a></li>
        <li><a href="Cadastro_Modelo.php">Modelo</a></li>
        <li><a href="Cadastro_Equipamento.php">Equipamento</a></li>
    </ul>
    <div class="bloco">
        <form>
            <div class="form-group">
                <div class="input-group col-sm-10">
                    <div class="text-right">
                        <input type="marca" class="form-control" id="marca" placeholder="Adicione uma nova marca">
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
        </form>
    </div>
    <h1  class="text-center">Consulte</h1>
    <div class="row">
        <div class="col-sm-10">
            <div class="text-center">
                <div class="table-responsive">
                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Marca</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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