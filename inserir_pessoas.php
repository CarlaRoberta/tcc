<?php
require 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuario (USU_LOGIN, USU_EMAIL, USU_PASS) values ('$nome', '$email', '$senha')";


//var_dump($sql);
//var_dump($con);

$result = mysqli_query($con, $sql);

if ($result == true) {
    require 'Home.php';
   
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>
