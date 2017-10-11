<?php

require 'conexao.php';
$sql = "select * from modelo_comandos";

$result = mysqli_query($con, $sql);

$dados = mysqli_fetch_assoc($result);

$codaprendido = $dados ['MCM_CODAPRENDIDO'];
//var_dump($codaprendido);
$idcomando = $dados ['CMD_ID'];
//var_dump($idcomando);
$idmodelo = $dados ['MOD_ID'];

$server_ip = '192.168.0.108';
$server_port = 8889;
$beat_period = 5;
$message = explode(",",$codaprendido);
//var_dump($message);

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
for ($i = 0; $i <= 196; $i++) {
    
    socket_sendto($socket, $message[$i], 4, 0, $server_ip, $server_port);
}
    
//$server_ip   = '127.0.0.1';
//$server_port = 43278;
//$beat_period = 5;
//$message     = 'PyHB';
//print "Sending heartbeat to IP $server_ip, port $server_portn";
//print "press Ctrl-C to stopn";
//if ($socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP)) {
//  while (1) {
//    socket_sendto($socket, $message, strlen($message), 0, $server_ip, $server_port);
//    print "Time: " . date("%r") . "n";
//    sleep($beat_period);
//  }
//} else {
//  print("can't create socketn");
//}
 