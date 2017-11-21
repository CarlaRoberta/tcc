<?php

require './conexao.php';

$nome = $_POST['equipamento'];
$id_modelo = $_POST["selectmodelo"];
$id_ambiente = $_POST['selectambiente'];

$sql = "UPDATE equipamentos SET EQP_NOME = '$nome', MOD_ID = '$id_modelo', AMB_ID = $id_ambiente";
//var_dump($sql);
$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Equipamento.php';
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>