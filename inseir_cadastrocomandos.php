<?php

require 'conexao.php';

$descrição = $_POST['descricao'];

$sql = "insert into comandos (CMD_DESCRI) values ('$descrição')";

//var_dump($sql);
$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Cadastro_Descricao.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>