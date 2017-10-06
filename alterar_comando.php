<?php
require './conexao.php';
$id_comandos = $_POST["id_comandos"];
$descricao = $_POST["descricao"];

$sql = "UPDATE comandos SET CMD_DESCRI = '$descricao' WHERE CMD_ID = '$id_comandos'";
$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Comandos.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>