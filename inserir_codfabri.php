<?php

require 'conexao.php';

$marcamodelo = $_POST['selectmodelo'];
//var_dump($marcamodelo);
$comando = $_POST['comandos'];
//var_dump($comando);
$codfabri =$_POST['comandocapturados'];
//var_dump($codfabri);
$sql = "insert into modelo_comandos (MOD_ID,CMD_ID,MCM_CODAPRENDIDO) values ('$marcamodelo','$comando','$codfabri')";

//var_dump($sql);
$result = mysqli_query($con, $sql);

if ($result == true) {
    require './Aprender.php';;
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>