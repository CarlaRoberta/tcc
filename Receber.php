<?php

error_reporting(~E_WARNING);

$server = '127.0.0.1';
$port = 8888;

if (!($sock = socket_create(AF_INET, SOCK_DGRAM, 0))) {
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}
echo "Socket created \n";
$i = 0;
    while ($i==0){
        //$r = socket_recvfrom($sock, $buf, $port, 0, $remote_ip, $remote_port);
        
    $bind = socket_bind($sock, $server,1220);
    var_dump($bind);
    if ($bind != false){
        $funciona= socket_recvfrom($sock, $buf, 100, 0, $port);
        if ($funciona !=0){
    
            var_dump($funciona);
            var_dump($buf);
             echo $funciona;
            $i++;
        }
    }
    else{
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
        die("Não consegui realizar o bind: $errorcode, $errormsg");
    }
    
    
    
     
    }