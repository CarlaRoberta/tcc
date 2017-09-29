<?php

require 'conexao.php';

$equipamento = $_POST['equipamento'];
$ambiente = $_POST['ambiente'];
$selectmarca = $_POST['selectmarca'];
$selectmodelo = $_POST['selectmodelo'];
$sql = "insert into modelo (MOD_NOME,MOD_SMA) values ('$modelo','$selectmarca')";

var_dump($sql);
$result = mysqli_query($con, $sql);

if ($result == true) {
    //require 'Cadastro_Marca.php';
    echo 'aaaa';
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>