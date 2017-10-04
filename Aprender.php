<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <form>
        <div class="form-group">
            <label for="marca/modelo" class="col-sm-3 control-label">Modelo:</label>
            <div class="input-group col-sm-2">
                <select id="doque" name="selectmodelo" required class="form-control">
                    <option value="ND"></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="equipamento" class="col-sm-3 control-label"> Equipamento:</label>
            <div class="input-group col-sm-2">
                <select id="equipamento" name="equipamento" required class="form-control">
                    <option value="ND"></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Comandos Capturados:</label>
            <div class="input-group col-sm-7">          
                <textarea class="form-control" rows="3"></textarea>
                <div class="text-right">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label"> Descrição:</label>
            <div class="input-group col-sm-7">          
                <textarea class="form-control" rows="3"></textarea>
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