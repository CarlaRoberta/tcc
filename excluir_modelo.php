<?php
require './conexao.php';
$id_modelo = $_GET["id"];

$sql = "DELETE FROM modelo WHERE MOD_ID = '$id_modelo'";
//var_dump($sql);

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
