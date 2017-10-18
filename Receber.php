<?php

$host = "192.168.0.108";
$port = 8888;
// don't timeout!
set_time_limit(0);
// create socket
$sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// bind socket to port
var_dump($port);
var_dump($host);
// Bind the source address
if( !socket_bind($sock, $host , $port) )
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
     
    die("Could not bind socket : [$errorcode] $errormsg \n");
}
 
echo "Socket bind OK \n";
// start listening for connections
if(!socket_listen($socket, 3))
        {
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);
     
    die("Could not socket : [$errorcode] $errormsg \n");
}
 
echo "Socket listen OK \n";


while(true){
    // accept incoming connections
    // spawn another socket to handle communication
    $spawn = socket_accept($socket) or die("Could not accept incoming connection\n");
    // read client input
    $input = socket_read($spawn, 1024) or die("Could not read input\n");
    // clean up input string
    $input = trim($input);
    echo "Client Message : ".$input;
   // socket_close($spawn);
}
socket_close($socket);