<?php
require './conexao.php';
$id_marca = $_GET["id"];

$sql = "DELETE FROM marca WHERE MCA_ID = '$id_marca'";
//var_dump($sql);

$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Marca.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>