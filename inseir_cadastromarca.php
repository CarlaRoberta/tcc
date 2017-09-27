<?php

require 'conexao.php';

$marca = $_POST['marca'];

$sql = "insert into marca (MCA_NOME) values ('$marca')";

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