<?php
require './conexao.php';
$id_comandos = $_GET["id"];

$sql = "DELETE FROM comandos WHERE CMD_ID = '$id_comandos'";
//var_dump($sql);

$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Comandos.php';
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
               <a href="Comandos.php" class="btn btn-sm btn-warning" > <span class="glyphicon glyphicon-hand-left"> Voltar</span>  </a>
            </div>
        </div>
    </div> 

    <?php require './inc_rodape.php'; ?>

    <?php
}
