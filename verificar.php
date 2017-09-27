<?php

require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE USU_EMAIL = '$email' AND USU_PASS = '$senha'";

//
//var_dump($sql);
//var_dump($email);
//var_dump($senha);
//var_dump($con);

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!";
    exit;
} else {
    require 'Home.php';
}
?>
