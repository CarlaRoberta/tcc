<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <div class="panel panel-danger">
        <div class="panel-heading">Controle</div>
        <div class="panel-body">
            <p>Selecione o camando para ser enviado.</p>
        </div>
    </div>
    <h1 style="text-align-last: right;">Ambiente</h1>
    <ul class="menulateral">
        <li><a class="active" href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
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
                                <td class="text-right"><div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        </label>
                                    </div></td>                   
                            </tr>
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