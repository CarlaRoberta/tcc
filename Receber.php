<?php

error_reporting(~E_WARNING);

$server = '192.168.0.108';
$port = 8888;

if (!($sock = socket_create(AF_INET, SOCK_DGRAM, 0))) {
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

echo "Socket created \n";

while(1)
{
    echo 'esperando';
    //Receive some data
    $r = socket_recvfrom($sock, $buf, $port, 0, $remote_ip, $remote_port);
    echo "$remote_ip : $remote_port -- " . $buf;    
    socket_sendto($sock, "OK " . $buf , 100 , 0 , $remote_ip , $remote_port);
}
 