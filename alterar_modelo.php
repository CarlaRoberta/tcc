<?php

require './conexao.php';

$modelo = $_POST['modelo'];
$id_modelo = $_POST["id_modelo"];
$selectmarca = $_POST['selectmarca'];

$sql = "UPDATE modelo SET MOD_NOME = '$modelo', MOD_SMA = '$selectmarca' WHERE MOD_ID = $id_modelo";
$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Modelo.php';
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>