<?php

require 'conexao.php';

$marcamodelo = $_POST['selectmodelo'];
$comando = $_POST['comandos'];
$codfabri =$_POST['comandocapturados'];

$sql = "insert into modelo_comandos (MOD_ID,CMD_ID,MCM_CODAPRENDIDO) values ('$marcamodelo','$comando','$codfabri')";

//var_dump($sql);
$result = mysqli_query($con, $sql);

if ($result == true) {
    echo 'foi';
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>