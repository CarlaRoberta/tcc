<?php

require 'conexao.php';

$modelo = $_POST['modelo'];
$selectmarca = $_POST['selectmarca'];
$sql = "insert into modelo (MOD_NOME,MCA_ID) values ('$modelo','$selectmarca')";

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