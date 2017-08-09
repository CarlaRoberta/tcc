<header>
    <?php require './inc_menu.php'; ?>
</header>
<div class="container">
    <form action="inserir_cadastro.php" method="POST" >
        <div class="form-group">
            <div class="grupo1">
                <label for="marca"class="col-sm-3 control-label">Marca:</label>

                <div class="input-group">

                    <select id="marca" name="marca" required class="form-control">
                        <option value="ND">selecione</option>
                        <option value=""><?php echo ''; ?></option>
                        <option value=""><?php echo ''; ?></option>
                        <option value=""><?php echo ''; ?></option>
                    </select>
                </div><br>

                <label for="modelo"class="col-sm-3 control-label">Modelo:</label>
                <div class="input-group">

                    <select  id="modelo" name="modelo" required class="form-control">
                        <option value="ND">selecione</option>
                        <option value=""><?php echo ''; ?></option>
                        <option value=""><?php echo ''; ?></option>
                        <option value=""><?php echo ''; ?></option>
                    </select>
                </div>
            </div>
        </div>   
        <div class="form-group">
            <div class="grupo2">
                <label for="codigodeindentificacao" class="col-sm-4 control-label">Codigo de Indentificação:</label>
                <div class="input-group col-sm-5">
                    <input type="text" name="codigodeindentificacao" id="codigodeindentificacao" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="grupo3">
                <label for="nome" class="col-sm-3 control-label">Nome do Usuário:</label>
                <div class="input-group col-sm-5">
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <label for="senha"class="col-sm-3 control-label"> Senha:</label>
                <div class="input-group col-sm-5">
                    <input   type="password" name="senha" id="senha" class="form-control">
                </div>
            </div>    
        </div> 
    </form>
</div>
    <?php
    require './inc_rodape.php';
    ?>