<?php

require 'conexao.php';

$modelo = $_POST['modelo'];

$sql = "insert into modelo (MOD_NOME) values ('$modelo')";


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