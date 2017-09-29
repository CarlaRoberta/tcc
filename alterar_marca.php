<?php

require './conexao.php';

$marca = $_POST['marca'];
$id_marca = $_POST["id_marca"];

$sql = "UPDATE marca SET MCA_NOME = '$marca' WHERE MCA_ID = $id_marca";

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