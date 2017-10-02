<?php
require './conexao.php';
$id_marca = $_GET["id"];

$sql = "DELETE FROM marca WHERE MCA_ID = '$id_marca'";
//var_dump($sql);

$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Marca.php';
} else {
    ?> 
    <header>
        <?php require './inc_menu.php'; ?>
    </header> 

    <div  class="text-center">
        <div class="col-sm-6">
            <?php
            if (!mysqli_query($con, $sql)) {
                $erro = mysqli_error($con);
                echo "<h1>Ocorreu o seguinte erro: ", '"', $erro, '"</h1>';
            }
            ?>
        </div>
    </div>
    <?php
}
