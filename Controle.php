        <header>
            <?php require './inc_menu.php'; ?>
        </header>
        <div class="container">
            <div class="panel panel-danger">
                <div class="panel-heading">Controle</div>
                <div class="panel-body">
                    <p>Aperte os Botões para cumprir determinadas ações como:</p>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Ligar ou Desligar</li>
                    <li class="list-group-item">Aumentar ou diminuir temperaturas</li>
                </ul>
            </div>
            <div class="form-group">
                <label for="sala" class="col-sm-1 control-label">Sala</label>
                <div class="input-group">
                    <select id="sala" name="sala" required class="form-control">
                        <option value="ND">selecione</option>
                        <option value=""><?php echo '';?></option>
                        <option value=""><?php echo '';?></option>
                        <option value=""><?php echo '';?></option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="predio" class="col-sm-1 control-label">Predio</label>
                <div class="input-group">
                    <select  id="predio" name="predio" required class="form-control">
                        <option value="ND">selecione</option>
                        <option value=""><?php echo '';?></option>
                        <option value=""><?php echo '';?></option>
                        <option value=""><?php echo '';?></option>
                    </select>
                </div>
            </div>
            <div class="botões" style="margin-top: 10%;">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-lg active">Ligar</button>
                    <button type="button" class="btn btn-primary btn-lg active">Desligar</button>
                </div><br><br>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary btn-lg active">Aumentar Temperatura</button>
                    <button type="button" class="btn btn-primary btn-lg active">Diminuir Temperatura</button>
                </div>
            </div>
        </div>
        <?php
        require './inc_rodape.php';
        ?>