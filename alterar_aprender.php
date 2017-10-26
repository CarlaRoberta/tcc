<?php
require './conexao.php';

$marcamodelo = $_POST['selectmodelo'];
$comando = $_POST['comandos'];
$codfabri =$_POST['comandocapturados'];

$sql = "UPDATE modelo_comandos SET MOD_ID = '$marcamodelo',CMD_ID='$comando', MCM_CODAPRENDIDO = '$codfabri'";
$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Aprender.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>