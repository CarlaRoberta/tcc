<?php

require 'conexao.php';

$equipamento = $_POST['equipamento'];
$ambiente = $_POST['ambiente'];
$selectmodelo = $_POST['selectmodelo'];
$selectambiente =$_POST['selectambiente'];

$sql = "insert into equipamentos (EQP_NOME,MOD_ID,AMB_ID) values ('$equipamento','$selectmodelo','$selectambiente')";

var_dump($sql);
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