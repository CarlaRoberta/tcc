<html><h1>Server</h1></html>
<?php
error_reporting(E_ALL | E_STRICT);

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

socket_bind($socket, '192.168.0.105', 8888);

$from = "";
$port = 8888;
socket_recvfrom($socket, $buf, 12, 0, $from, $port);
echo "Received $buf ";

?>