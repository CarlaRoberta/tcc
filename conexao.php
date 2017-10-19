<meta charset="UTF-8">

<?php
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$hostname = "localhost";
$user = "root";
$pass = "";
$bancodedados = "controlardb";

$con = mysqli_connect($hostname, $user, $pass, $bancodedados);
if (!$con) {
    exit("Erro ao conectar ao Banco de Dados");
} 
//else {
//    if ($con == true) {
//        echo 'sucesso';
//        exit;
//    }
//}
//if (!@mysqli_select_db($bancodedados)) {
//    echo "<b>Não foi possivel selecinar o banco de dados, ou ele não existe ou esta corrompido!</b>";
//    exit;
//}
?>