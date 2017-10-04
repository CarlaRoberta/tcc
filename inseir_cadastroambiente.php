<?php

require 'conexao.php';

$ambiente = $_POST['ambiente'];

$sql = "insert into ambiente (AMB_NOME) values ('$ambiente')";

$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Ambiente.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>