        <meta charset="UTF-8">

<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$hostname="localhost";
$user="root";
$pass="1234";
$bancodedados="Controlardb";

$con = mysql_connect($hostname,$user,$pass);
mysql_select_db($bancodedados, $con);

if (!$con){
    exit("Erro ao conectar ao Banco de Dados");
}  else {
    exit("NANIIIIIIIIIIIIIII");    
}

?>