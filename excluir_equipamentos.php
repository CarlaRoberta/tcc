<?php
require './conexao.php';
$id_equipamento = $_GET["id"];

$sql = "DELETE FROM equipamentos WHERE EQP_ID = '$id_equipamento'";
//var_dump($sql);

$result = mysqli_query($con, $sql);

if ($result == true) {
    require './Cadastro_Equipamento.php';
} else {
    ?> 
    <header>
        <?php require './inc_menu.php'; ?>
    </header> 

    <div  class="text-center">
        <?php
        if (!mysqli_query($con, $sql)) {
            $erro = mysqli_error($con);
            echo "<h1>Ocorreu o seguinte erro: ", '"', $erro, '"</h1>';
        }
        ?>
    </div>
    <div class="form-group" >
        <div class="input-group col-sm-5">
            <div class="text-right">
                <a href="Cadastro_Equipamento.php" class="btn btn-sm btn-warning" > <span class="glyphicon glyphicon-hand-left"> Voltar</span>  </a>
            </div>
        </div>
    </div> 

    <?php require './inc_rodape.php'; ?>

    <?php
}
